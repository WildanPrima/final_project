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
            <>

            <div class="auth-buttons">
                <button class="login">Login</button>
                <button class="signup">Sign Up</button>
            </div>
        </div>
    </header>
    <div class="registration-container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h3 class="text-center mb-4">Welcome back! 👋</h3>
        <p class="text-center">Please Sign Up to make your account.</p>
        <form method="POST" action="{{ route('done_regis') }}">
            @csrf
            <input type="hidden" name="role" value="siswa">
            <div class="form-group">
                <label for="username">NIS</label>
                <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" placeholder="Type your NIS" value="{{ old('username') }}">
                @error('username')
                        <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control  @error('name') is-invalid @enderror" id="password" name="password" placeholder="Type your password">
                @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Masukan Konfirmasi Password Kamu">
                @error('password_confirmation')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group text-end">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <div class="text-center mt-3">
                <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
            </div>
        </form>
    </div>
</body>
</html>
