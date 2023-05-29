<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/user/userLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/env.css') }}">
    <title>User Landing</title>
</head>
<body>
    <nav class="nav nav-user">
        <div class="nav-container">
            <div class="nav-list">
                <div class="menu-container add-gap">
                    <a href="/User/UserLanding/UserLanding.html" class="a-nav">Home</a>
                    <a href="/User/UserMK/UserMK.html" class="a-nav">Semester</a>
                    <a href="#" class="a-nav">Tentang</a>
                </div>
                <div class="status-container add-gap stat-col">
                    <a href="/User/UserSignIn/UserSignIn.html" class="a-nav">Sign In</a>
                    <a href="/User/UserLogin/UserLogin.html" class="a-nav">Login</a>
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="status-container none stat-col">
                <a href="/" class="a-nav">Sign In</a>
                <a href="" class="a-nav">log out</a>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </nav>
    <div class="jumbotron" style="background-image: url({{ asset('images/jumbotron.png') }})">
        <div class="h1-jumbo">
            <h1 class="h1-jumbo">SISTEM INFORMASI AKADEMIK</h1>
            <h1 class="h1-jumbo">UNIVERSITAS AIRLANGGA</h1>
        </div>
        <div class="h2-jumbo">
            <h2 class="h2-jumbo">Cari materi Sistem Informasi Universitas Airlangga di sini
                Kami akan selalu update materi sesuai kurikulum</h2>
        </div>
    </div>
    <div class="container">
        <div class="desc-container">
            <h2 class="">Apa yang dipelajari di Sistem Informasi Universitas Airlangga ?</h2>
            <div class="desc-container-list">
                <div class="desc-container-item">
                    <img src="{{ asset('images/mi_computer.png') }}" alt="">
                    <p class="p-large">Bahasa pemrograman, Pengembangan perangkat lunak seperti Website dan aplikasi Android  </p>
                </div>
                <div class="desc-container-item grey-desc">
                    <img src="{{ asset('images/ph_database.png') }}" alt="">
                    <p class="p-large">Basis data dan perancangannya serta implementasinya pada perangkat lunak</p>
                </div>
                <div class="desc-container-item yellow-desc">
                    <img src="{{ asset('images/material-symbols_chart-data-outline.png') }}" alt="">
                    <p class="p-large">Manajemen dan bisnis serta statistik yang terkait dengan proses bisnis tersebut</p>
                </div>
            </div>
        </div>
        <div class="desc-container">
            <h2 class="">Apa yang dipelajari di Sistem Informasi Universitas Airlangga ?</h2>
            <div class="desc-container-item">
                <img src="{{ asset('images/ph_student-bold.png') }}" alt="">
                <p class="p-large">Terdapat 8 semester materi lengkap</p>
                <a href="/User/UserSemester/UserSemester.html"><button class="button grey"><i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
        </div>
    </div>
    <footer>
        <div class="img-div">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="about">
            <h3>Profil Pengembang</h3>
            <a href="a-nav" class="a-nav">Nadita</a>
            <a href="a-nav" class="a-nav">Abram</a>
        </div>
    </footer>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>