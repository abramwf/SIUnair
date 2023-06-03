<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/adminShow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin Show</title>
</head>
<body>
    <nav class="navbars">
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
        <button class="button"><a style="color: black" href="{{ route('adminList') }}"><i class="fa-solid fa-chevron-left"></i> Ke List</a> </button>
        <div class="content-container">
            <div class="view-container">
                <div class="view-item">
                    <h2>{{ $materis->judul }}</h2>
                    <p>diopload oleh Valasinov Kormeo pada 12-06-2022</p>
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
                    <p>Link File :</p>
                    <a target="blank" href="{{ $materis->file }}">{{ $materis->file }}</a>
                </div>
            </div>
            <div class="action-buttons">
                <form action="{{ route('edit', $materis) }}" method="GET">
                    @method('update')
                    @csrf
                    <button class="button green">Edit <img src="/assets/icon/material-symbols_edit-outline-rounded.png" alt=""></button>
                </form>
                <form action="{{ route('materi.destroy', $materis) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="button red">Delete <img src="/assets/icon/mdi_trash-can-outline.png" alt=""></button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>