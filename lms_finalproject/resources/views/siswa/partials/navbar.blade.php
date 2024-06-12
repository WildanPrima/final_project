<header class="p-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="logo">Brand</h1>
            <div class="d-flex align-items-center">
                <nav>  
                    <a href="#" class="text-decoration-none text-dark me-3">Home</a>
                    <a href="#" class="text-decoration-none text-dark me-3">Mapel</a>
                    <a href="#" class="text-decoration-none text-dark me-3">Items</a>
                    <a href="#" class="text-decoration-none text-dark">Informasi</a>
                </nav>
            </div>
            <div class="auth-buttons">
                <button class="login"><a href="{{ route('login') }}" style="color: black; text-decoration: none">Login</a></button>
                <button class="signup"><a href="{{ route('register') }}" style="color: white; text-decoration: none">Sign Up</a></button>
                
                <img class="profile-img" width="15%" src="{{ asset('images/profile-picture.png') }}" alt="Profile Picture">
            </div>
        </div>
    </div>
</header>