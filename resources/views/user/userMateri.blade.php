<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/userMateri.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin List Page Item</title>
</head>
<body>
    <div class="navbars nav-user">
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
    </div>
    <div class="container">
        <form action="{{ route('userMateri', $id) }}" class="search" method="GET">
            <input type="search" name="search" value="{{ request('search') }}" placeholder="cari judul atau kategori">
            <button class="button">Cari <i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="content-container">
            <h2>{{ $matkuls->matkul }}</h2>
            <div class="two-content-container">
                <div class="list-container">
                    @foreach ($materi_paginates as $materi)
                        <div class="item-container">
                            <div class="admin-date">
                                <p>Admin : Valasinov Kormeno</p>
                                <p>{{ $materi->created_at->format('d-m-Y') }} <span>{{ $materi->created_at->format('H:i:s') }}</span></p>
                            </div>
                            <div class="item-content-container">
                                <div class="item-content">
                                    <p><span>Foto Profil</span></p>
                                    <img src="{{ asset('images/programming.jpg') }}" alt="">
                                </div>
                                <div class="item-content">
                                    <p><span>Judul</span> : {{ $materi->judul }}</p>
                                    <p><span>Mata kuliah</span> : {{ $materi->matkul->matkul }}</p>
                                    <p><span>Semester</span> : {{ $materi->semester_id }}</p>
                                    <p><span>Kategori</span> : {{ $materi->ebook }} {{ $materi->ppt }} {{ $materi->contoh_soal }}</p>
                                </div>
                                <div class="item-content">
                                    <p><span>Deskripsi</span> :</p>
                                    <p>{{ Str::limit($materi->deskripsi, 120, '...') }}</p>
                                    <p><span>File</span> : </p>
                                    <a target="blank" href="{{ $materi->file }}">{{ $materi->file }}</a>
                                </div>
                            </div>
                            <div class="action-buttons">
                                <button class="button grey"><a href="{{ route('userView', $materi->id) }}">View</a><img src="/assets/icon/material-symbols_view-carousel-outline-rounded.png" alt=""></button>
                            </div>
                        </div>
                    @endforeach
                    <div class="pagination">
                        {{ $materi_paginates->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <div class="recomen-container">
                    <p>Lihat Mata Kuliah Lain 
                        di semester ini</p>
                    <ul>
                        @foreach ($matkul_semesters as $mk)
                            <li><a href="{{ route('userMateri', $mk->id) }}">{{ $mk->matkul }}</a></li>
                        @endforeach
                    </ul>
                </div>
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
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>