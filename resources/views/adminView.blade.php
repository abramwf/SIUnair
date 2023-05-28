<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/adminView.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin List Page Item</title>
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
            <img src="/assets/img/logo.png" alt="">
        </div>
    </nav>
    <div class="container">
        <div class="action-container">
            <button class="button"><a style="color: black;" href="{{ route('adminList') }}">Ke List <i class="fa-sharp fa-regular fa-plus"></i></a> </button>
            <button class="button blue"><a style="color: black;" href="{{ route('materi.create') }}">Input baru<i class="fa-sharp fa-regular fa-plus"></i></a> </button>
            <div class="search">
                <input type="text">
                <button class="button">Cari <i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="content-container">
            <h2>{{ $matkuls->matkul }}</h2>
            <div class="list-container">
                @foreach ($materis as $materi)
                    <div class="item-container">
                        <div class="admin-date">
                            <p>Admin : Valasinov Kormeno</p>
                            <p>{{ $materi->created_at->format('d-m-Y') }} <span>{{ $materi->created_at->format('H:i:s') }}</span></p>
                        </div>
                        <div class="item-content-container">
                            <div class="item-content">
                                {{-- <p><span>Foto Profil</span></p> --}}
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
                                {{ Str::limit($materi->deskripsi, 120, '...') }}
                                <p><span>File</span> : </p>
                                <p style="word-wrap: break-word;">{{ $materi->file }}</p>
                                {{-- <div class="file-container">
                                    <div class="file">
                                        <p>For loop.pdf</p>
                                        <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                                    </div>
                                    <div class="file">
                                        <p>For loop.ppt</p>
                                        <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                                    </div>
                                    <div class="file">
                                        <p>For loop.word</p>
                                        <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="action-buttons">
                            <button class="button grey"> <a href="{{ route('show', $materi->id) }}">View</a> <img src="/assets/icon/material-symbols_view-carousel-outline-rounded.png" alt=""></button>
                            <form action="{{ route('edit', $materi) }}" method="GET">
                                @method('update')
                                @csrf
                                <button class="button green">Edit <img src="/assets/icon/material-symbols_edit-outline-rounded.png" alt=""></button>
                            </form>
                            <form action="{{ route('materi.destroy', $materi) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="button red">Delete <img src="/assets/icon/mdi_trash-can-outline.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
    </div>
    <div class="navigator">
        <i class="fa-solid fa-chevron-left"></i>
        <span><a href="">1</a></span>
        <span><a href="">2</a></span>
        <span><a href="">3</a></span>
        <span><a href="">4</a></span>
        <i class="fa-solid fa-chevron-right"></i>
    </div>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>