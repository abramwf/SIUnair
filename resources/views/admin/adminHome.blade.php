
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/adminHome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin Home</title>
</head>
<body>
    <nav class="nav">
        <div class="nav-container">
            <div class="nav-list">
                <a href="{{ route('adminHome') }}" class="a-nav">Home</a>
                <div class="status-container">
                    <a href=""><img src="/assets/icon/admin.png" alt=""></a>
                    <a href="/Admin/AdminLogin/AdminLogin.html" class="a-nav">log out</a>
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="status-container none">
                <a href=""><img src="/assets/icon/admin.png" alt=""></a>
                <a href="" class="a-nav">log out</a>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </nav>
    <div class="container">
         <h1>Selamat Datang Admin!</h1>
         <div class="bebas">
            <a href="{{ route('materi.create') }}" class="href">
                <div class="menu satu" href="">
                    <img src="{{ asset('images/input.png') }}" alt="gambar_input">
                    <p class="p-large">Input materi baru</p>
                </div>
            </a>
            <a href="{{ route('adminList') }}">
                <div class="menu dua">
                    <img src="{{ asset('images/materi.png') }}" alt="gambar_materi">
                    <p class="p-large">Lihat Materi yang sudah di input</p>
                </div>
            </a>
         </div>
        
    </div>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>