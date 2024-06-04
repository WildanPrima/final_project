<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body

header {
    background: #fff;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
}

.auth-buttons {
    float: right;
}

.auth-buttons button {
    margin-left: 20px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

.auth-buttons .login {
    background: #fff;
    color: #000;
    border: 1px solid #ddd;
}

.auth-buttons .signup {
    background: #7f3ce7;
    color: #fff;
}
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
    max-width: 400px;
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 0 auto; /* Add this line */
    text-align: center; /* Add this line */
}

        .login-container form .form-control {
            margin-bottom: 1rem;
        }
        .login-container form .btn {
            width: 100%;
            background-color: #6c63ff;
            color: white;
        }
        .login-container form .btn:hover {
            background-color: #5a54d6;
        }
        .login-container .text-center a {
            color: #6c63ff;
        }
    </style>
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
    <div class="login-container">
        <h3 class="text-center mb-4">Welcome back!</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
            <button type="submit" class="btn btn-primary">Log In</button>
            <div class="text-center mt-3">
                <span>Don't have an account? <a href="#">Sign Up</a></span>
            </div>
        </form>
    </div>
</body>
</html>
