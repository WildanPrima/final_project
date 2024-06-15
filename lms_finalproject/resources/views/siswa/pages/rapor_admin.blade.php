<!DOCTYPE html>
<html>
<head>
    <title>All Raport</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/rapor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>
    @include('siswa.partials.navbar')
    <section class="container">
        <div class="content">
            <p class="mb-4 fs-4">Halo admin, berikut adalah nilai semua siswa</p>
            <div class="row">
                <div class="col-md-3">
                    <form action="{{ route('rapor_searching') }}" method="GET">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Cari Nama Siswa..." name="search" value="{{ request('search') }}">
                        </div>
                    </form>
                </div>
            </div>
            @if (!empty($angkatanNilais))
                @forelse($angkatanNilais as $angkatanNilai)
                    <div class="d-flex justify-content-between align-content-center">
                        <p class="mt-4 fs-5">Kelas {{ $angkatanNilai['angkatan']->class }} - <strong>Semester {{ $angkatanNilai['angkatan']->semester }}</strong></p>
                        <p class="mt-4 fs-5">Nama Siswa: <strong>{{ $angkatanNilai['siswa']->name }}</strong></p>
                    </div>
                    <div class="table-container">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Mata Pelajaran</th>
                                    <th>Tugas 1</th>
                                    <th>Tugas 2</th>
                                    <th>Tugas 3</th>
                                    <th>Ujian</th>
                                    <th>Rata-rata</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($angkatanNilai['nilais'] as $nilai)
                                    <tr>
                                        <td>{{ $nilai->mapel->name }}</td>
                                        <td class="text-end">{{ $nilai->tugas1 }}</td>
                                        <td class="text-end">{{ $nilai->tugas2 }}</td>
                                        <td class="text-end">{{ $nilai->tugas3 }}</td>
                                        <td class="text-end">{{ $nilai->ujian }}</td>
                                        <td class="text-end">{{ number_format($nilai->average, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <strong>Nilai Rata-rata Keseluruhan: {{ number_format($angkatanNilai['overallAverage'], 2) }}</strong>
                        <h4>Status: 
                            <button class="btn {{ $angkatanNilai['status'] == 'Lulus' ? 'btn-success' : 'btn-danger' }}">
                                {{ $angkatanNilai['status'] }}
                            </button>
                        </h4>
                    </div>
                @empty
                    <strong class="text-secondary text-center align-items-center mt-4 mb-5">Belum Ada Data Nilai Siswa</strong>
                @endforelse
            @else
                <strong class="text-secondary text-center align-items-center mt-4 mb-5">Tidak Ada Hasil yang Ditemukan!</strong>
            @endif
            <div class="d-flex">
                {{ $angkatans->links() }}
            </div>
        </div>
    </section>


    <footer>
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="logo">Brand</h1>
        </div>
        <div class="footer-section">
            <h4>Company</h4>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Navigation</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Mapel</a></li>
                <li><a href="#">Rapor</a></li>
            </ul>
        </div>
        <div class="footer-section contact-info">
            <h4>Contact</h4>
            <ul>
                <li><a href="mailto:Brand@gmail.com">Brand@gmail.com</a></li>
                <li><a href="tel:+62812345678">+62812345678</a></li>
                <li><a href="#">@brand</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>