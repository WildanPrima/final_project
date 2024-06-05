<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/mapel.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Brand</div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Mapel</a></li>
                    <li><a href="#">Items</a></li>
                    <li><a href="#">Informasi</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <img class="profile-img" src="profile-picture.jpg" alt="Profile Picture">
            </div>
        </div>
    </header>

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
                            <div class="mt-4">
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
                <div>
                    <h3 class="font-bold mb-4">Company</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400">About Us</a></li>
                        <li><a href="#" class="text-gray-400">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Contact</h3>
                    <p class="text-gray-400">Brand@gmail.com</p>
                    <p class="text-gray-400">+62812345678</p>
                    <p class="text-gray-400">@brand</p>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Navigation</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400">Home</a></li>
                        <li><a href="#" class="text-gray-400">Mapel</a></li>
                        <li><a href="#" class="text-gray-400">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400">Informasi</a></li>
                    </ul>
                </div>
            <div class="footer-column">
                <h3>Nama Brand</h3>
                <p>Brand adalah platform Learning Management System (LMS) yang memudahkan proses belajar mengajar secara digital. Dirancang untuk institusi pendidikan [Nama Brand] menawarkan berbagai fitur untuk pengalaman belajar yang optimal.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Brand</p>
        </div>
    </footer>
</body>
</html>
