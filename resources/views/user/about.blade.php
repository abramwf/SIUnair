<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/user/about.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/env.css') }}">
    <title>About</title>
</head>
<body>
    <nav class="navbars nav-user">
        <div class="nav-container">
            <div class="nav-list">
                <div class="menu-container add-gap">
                    <a href="{{ route('userLanding') }}" class="a-nav">Home</a>
                    <a href="{{ route('userSemesters') }}" class="a-nav">Semester</a>
                    <a href="{{ route('about') }}" class="a-nav">Tentang</a>
                </div>
                <div class="status-container add-gap stat-col">
                    {{-- <a href="/User/UserSignIn/UserSignIn.html" class="a-nav">Sign In</a>
                    <a href="/User/UserLogin/UserLogin.html" class="a-nav">Login</a> --}}
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="status-container none stat-col">
                {{-- <a href="/" class="a-nav">Sign In</a>
                <a href="" class="a-nav">log out</a> --}}
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </nav>
    <div class="container">
        <div class="desc-container">
            <h2>Sistem Informasi Universitas Airlangga</h2>
            <img src="{{ asset('images/logo.png') }}" alt="">
            <p>Website ini dibuat untuk berbagi materi yang ada di jurusan Sistem Informasi Universitas Airlangga</p>
            <p>Terdapat kumpulan Materi di setiap Mata Kuliah dan Semester</p>
            <p>Website ini dibuat langsung oleh mahasiswa Sistem Informasi Universitas Airlangga</p>
        </div>
        <h3>Profil Pengembang</h3>
        <div class="card-container">
            <div class="card-item">
                <img src="{{ asset('images/abram.png') }}" alt="">
                <p>Abram</p>
                <p>Berkuliah di Sistem Informasi Universitas Airlangga</p>
                <div class="medsos">
                    <a target="_blank" href="https://www.linkedin.com/in/abram-widi-firmanto-6402ab220/"><i class="fa fa-linkedin"></i></a>
                    <a target="_blank" href="https://www.instagram.com/abrmw.f/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="card-item yellow-desc">
                <img src="{{ asset('images/nadita.png') }}" alt="">
                <p>Nadita</p>
                <p>Berkuliah di Sistem Informasi Universitas Airlangga</p>
                <div class="medsos">
                    <a target="_blank" href="https://www.linkedin.com/in/nadita-febianti-04a578252"><i class="fa fa-linkedin"></i></a>
                    <a target="_blank" href="http://instagram.com/naditaant_/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="img-div">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="about">
            <h3>Kontak kami</h3>
            <p class="a-nav">naditafebianti14@gmail.com</p>
            <p class="a-nav">abramwidi47@gmail.com</p>
        </div>
    </footer>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>