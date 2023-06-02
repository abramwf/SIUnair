<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/userSemesters.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>User Landing</title>
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
    <div class="container">
        <div class="information">
            <p>Keterangan : </p>
            <p>1 SKS = 50 Menit, untuk mata kuliah Praktikum 1 SKS = 100 menit</p>
            <p>Wajib = Mata kuliah wajib diambil oleh Mahasiswa</p>
            <p>Pilihan = Mata kuliah tidak wajib</p>
        </div>
        <div class="container-content">
            <div class="semester-container">
                @foreach ($semesters as $semester)
                    <div class="semester-list">
                        <h2> {{ $semester->semester }} </h2>
                        <?php $count = 1 ?>
                        @foreach ($semester->matkul as $mk)
                            <table>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td><a href="{{ route('userMateri', $mk->id) }}">{{ $mk->matkul }}</a></td>
                                    <td><p>{{ $mk->sks }} SKS</p></td>
                                    <td><p>{{ $mk->kategori = $mk->kategori == 1 ? "Wajib" : "Pilihan" }}</p></td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                @endforeach
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
    <script src="/assets/js/nav.js"></script>
</body>
</html>