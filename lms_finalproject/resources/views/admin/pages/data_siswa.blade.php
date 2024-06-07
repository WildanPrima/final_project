@extends('admin.main')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Data Siswa</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection