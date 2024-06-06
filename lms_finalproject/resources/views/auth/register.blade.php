<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
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
                <button class="login">Login</button>
                <button class="signup">Sign Up</button>
            </div>
        </div>
    </header>
    <div class="registration-container">
        <h3 class="text-center mb-4">Welcome back! 👋</h3>
        <p class="text-center">Please Sign Up to make your account.</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Type your Username" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail or phone number</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Type your e-mail or phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Type your password" required>
            </div>
            <div class="form-group text-end">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <div class="text-center mt-3">
                <span>Already have an account? <a href="#">Login</a></span>
            </div>
        </form>
    </div>
</body>
</html>
