<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

{{-- data siswa --}}
<script>
    $(document).ready(function() {
        // Saat tombol edit diklik
        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');
            // Mengisi form di modal edit
            $.ajax({
                url: '/data-siswa/' + id + '/edit',
                method: 'GET',
                success: function(data) {
                    $('#editNIS').val(data.NIS);
                    $('#editName').val(data.name);
                    $('#editEmail').val(data.email);
                    $('#editAddress').val(data.address);
                    $('#editAgama').val(data.agama);
                    $('#editGender').val(data.gender);
                    $('#editPhone').val(data.phone);
                    $('#editSiswaForm').attr('action', '/data-siswa/' + id);
                }
            });
        });
    
        // Menangani submit form edit
        $('#editSiswaForm').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action');
    
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    // Menutup modal dan merefresh halaman
                    $('#editSiswaModal').modal('hide');
                    alert(response.success);
                    location.reload();
                },
                error: function(xhr) {
                    // Menangani error
                    console.log(xhr.responseText);
                }
            });
        });

        // menangani delete data
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            var url = '/data-siswa/' + id;

            if (confirm('Apakah Anda yakin ingin menghapus data siswa ini?')) {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success);
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat menghapus data.');
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

{{-- data guru --}}
<script>
    $(document).ready(function () {
        // Saat tombol edit diklik
        $('.btn-GuruEdit').on('click', function() {
            var id = $(this).data('id');
            // Mengisi form di modal edit
            $.ajax({
                url: '/data-guru/' + id + '/edit',
                method: 'GET',
                success: function(data) {
                    $('#editNIP').val(data.NIP);
                    $('#editName').val(data.name);
                    $('#editEmail').val(data.email);
                    $('#editAddress').val(data.address);
                    $('#editGender').val(data.gender);
                    $('#editPhone').val(data.phone);
                    $('#editGuruForm').attr('action', '/data-guru/' + id);
                }
            });
        });

        // Menangani submit form edit
        $('#editGuruForm').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action');
    
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    // Menutup modal dan merefresh halaman
                    $('#editSiswaModal').modal('hide');
                    alert(response.success);
                    location.reload();
                },
                error: function(xhr) {
                    // Menangani error
                    console.log(xhr.responseText);
                }
            });
        });

        // menangani delete data
        $('.btn-GuruDelete').on('click', function() {
            var id = $(this).data('id');
            var url = '/data-guru/' + id;

            if (confirm('Apakah Anda yakin ingin menghapus data guru ini?')) {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success);
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat menghapus data.');
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    })
</script>