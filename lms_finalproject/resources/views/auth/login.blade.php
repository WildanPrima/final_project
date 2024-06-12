<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <style>
        .back-link {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .back-link i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    {{-- <header>
        <div class="container">
            <div class="logo">Brand</div>
            <>
            <div class="auth-buttons">
                <button class="login">Login</button>
                <button class="signup">Sign Up</button>
            </div>
        </div>
    </header> --}}
    <div class="login-container" style="margin-top: 10%">
        <div class="back-link">
            <i class="fas fa-angle-left fa-lg"></i>
            <a href="/" class="text-decoration-none text-dark">Kembali</a>
        </div>
        <h3 class="text-center mb-4">Welcome back! 👋</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan NIS/NIP anda">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Type your password">
            </div>
            {{-- <div class="form-group text-end">
                <a href="#">Forgot Password?</a>
            </div> --}}
            <button type="submit" class="btn btn-primary">Log In</button>
            <div class="text-center mt-3">
                <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
            </div>
        </form>
    </div>
</body>
</html>
