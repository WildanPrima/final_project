<!DOCTYPE html>
<html>
<head>
    <title>Rapor</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/rapor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>
    @include('siswa.partials.navbar')
    <section class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search in your rapor...">
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option>Latest</option>
                        <option>Oldest</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option>All Category</option>
                        <option>Category 1</option>
                        <option>Category 2</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-primary">Download</button>
                </div>
            </div>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Tugas 1</th>
                            <th>Tugas 2</th>
                            <th>Tugas 3</th>
                            <th>Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rapor as $rapor)
                            <tr>
                                <td>{{ $rapor['subject'] }}</td>
                                <td>{{ $rapor['task1'] ?? '' }}</td>
                                <td>{{ $rapor['task2'] ?? '' }}</td>
                                <td>{{ $rapor['task3'] ?? '' }}</td>
                                <td>{{ $rapor['exam'] ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="footer-column">
                    <h3 class="font-bold mb-4">Company</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400">About Us</a></li>
                        <li><a href="#" class="text-gray-400">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="font-bold mb-4">Contact</h3>
                    <p class="text-gray-400">Brand@gmail.com</p>
                    <p class="text-gray-400">+62812345678</p>
                    <p class="text-gray-400">@brand</p>
                </div>
                <div class="footer-column">
                    <h3 class="font-bold mb-4">Navigation</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400">Home</a></li>
                        <li><a href="#" class="text-gray-400">Mapel</a></li>
                        <li><a href="#" class="text-gray-400">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400">Informasi</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="font-bold mb-4">Nama Brand</h3>
                    <p>Brand adalah platform Learning Management System (LMS) yang memudahkan proses belajar mengajar secara digital. Dirancang untuk institusi pendidikan [Nama Brand] menawarkan berbagai fitur untuk pengalaman belajar yang optimal.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; Brand</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
