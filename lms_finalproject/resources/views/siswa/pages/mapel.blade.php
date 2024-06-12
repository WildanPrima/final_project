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
                        <li><a href="#" class="text-gray-400">Rapor</a></li>

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
</body>
</html>
