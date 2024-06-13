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
