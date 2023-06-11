<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/adminLogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin Login</title>
</head>
<body>
    <nav class="navbars">
        <div class="nav-container">
        </div>
        <div class="img-container">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </nav>
    <div class="login-container">
        <div class="heading">
            <h1>Login Admin</h1>
        </div>
        
        <form class="login-form" action="{{ route('loginProcess') }}" method="POST">
            @csrf
            <div class="login-input">
                <label for="email"> Email </label>    
                <input type="email" id="email" name="email">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror    
            </div>
            <div class="login-input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="button">Login</button>
        </form>
    </div>
    
    <script src="{{ asset('js/nav.js') }}"></script> 
</body>
</html>