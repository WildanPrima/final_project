<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>
    @include('siswa.partials.navbar')
    <section class="hero">
        <div class="container">
            <div class="hero-text">
                <h1>Selamat Datang di [Nama LMS]</h1>
                <p>Brand adalah platform Learning Management System (LMS) yang memudahkan proses belajar mengajar secara digital. Dirancang untuk institusi pendidikan [Nama Brand] menawarkan berbagai fitur untuk pengalaman belajar yang optimal.</p>
                <button class="cta">Mulai Sekarang</button>
            </div>
            <div class="hero-image">
                <img src="hero-image.png" alt="Hero Image">
            </div>
        </div>
    </section>

    <section class="feature">
        <div class="container">
            <div class="feature-item">
                <img src="feature-image1.png" alt="Feature Image">
                <h2>Penilaian yang Mudah</h2>
                <p>Pengelolaan penilaian tidak pernah semudah ini Dengan fitur Penilaian yang terintegrasi dalam [Nama LMS], proses penilaian menjadi lebih mudah dan efisien bagi pendidik.</p>
                <button class="cta">Mulai Sekarang</button>
            </div>
            <div class="feature-item">
                <img src="feature-image2.png" alt="Feature Image">
                <h2>Informasi</h2>
                <p>Lorem Ipsum when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-column">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact</h3>
                <ul>
                    <li>Email: Brand@gmail.com</li>
                    <li>Phone: +62812345678</li>
                    <li>Twitter: @brand</li>
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
