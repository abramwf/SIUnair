<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/userView.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>User View</title>
</head>
<body>
    <nav class="navbars nav-user">
        <div class="nav-container">
            <div class="nav-list">
                <div class="menu-container add-gap">
                    <a href="{{ route('userLanding') }}" class="a-nav">Home</a>
                    <a href="{{ route('userSemesters') }}" class="a-nav">Semester</a>
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
    <div class="container">
        <button class="button"><i class="fa-solid fa-chevron-left"></i> <a href="{{ route('userMateri', $materis->matkul_id) }}">Ke List</a></button>
        <div class="content-container">
            <div class="view-container">
                <div class="view-item">
                    <h2>{{ $materis->judul }}</h2>
                    <p>diopload pada {{ $materis->created_at->format('d-m-Y') }}</p>
                </div>
                <div class="view-item">
                    <p>Matakuliah : {{ $materis->matkul->matkul }}</p>
                    <p>Semester : {{ $materis->semester_id }}</p>
                    <p>Kategori : {{ $materis->ebook = $materis->ebook == 1 ? 'Ebook' : ''}} {{ $materis->ppt = $materis->ppt == 1 ? 'PPT' : '' }} {{ $materis->contoh_soal = $materis->contoh_soal == 1 ? 'Contoh soal' : '' }}</p>
                </div>
                <img class="img" src="{{ asset('images/programming.jpg') }}" alt="">
                <div class="view-item">
                    <p>Deskripsi :</p>
                    <p>{{ $materis->deskripsi }}</p>
                </div>
                <div class="view-item">
                    <p>File Download :</p>
                    <p>{{ $materis->file }}</p>
                    {{-- <div class="file-container">
                        <div class="file">
                            <p>For loop.word</p>
                            <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                        </div>
                        <div class="file">
                            <p>For loop.word</p>
                            <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                        </div>
                        <div class="file">
                            <p>For loop.word</p>
                            <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="other">
                <p>Lihat Materi Lain 
                    Tentang Mata kuliah ini</p>
                <ul>
                    @foreach ($materi_matkuls as $materi)
                        <li><a href="{{ route('userView', $materi->id) }}">{{ $materi->judul }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="img-div">
            <img src="/assets/img/logo.png" alt="">
        </div>
        <div class="about">
            <h3>Profil Pengembang</h3>
            <a href="a-nav" class="a-nav">Nadita</a>
            <a href="a-nav" class="a-nav">Abram</a>
        </div>
    </footer>
    <script src="/assets/js/nav.js"></script>
</body>
</html>