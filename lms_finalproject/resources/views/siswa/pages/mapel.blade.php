<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mapel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>
    @include('siswa.partials.navbar')
    <main class="main-container">
        <div class="container">
            <h1>Selamat Datang Di Kelas 12! 👋</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                @foreach($mapels as $mapel)
                    <div class="mapel-card">
                        <img src="{{ asset($mapel['image']) }}" alt="{{ $mapel['name'] }}">
                        <div class="p-4">
                            <h3 class="text-xl">{{ $mapel['name'] }}</h3>
                            <p>{{ $mapel['description'] }}</p>
                            <div class="flex items-center mt-4">
                                <i class="fas fa-user-graduate text-gray-500"></i>
                                <span class="ml-2 text-gray-600">{{ $mapel['students'] }} siswa</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

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
</body>
</html>
