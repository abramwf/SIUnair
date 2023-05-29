<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/adminList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin List Page</title>
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
        <div class="button blue"><a href="{{ route('materi.create') }}">Input baru</a><i class="fa-solid fa-plus"></i></div>
        <div class="container-content">
            <div class="semester-container">
                @foreach ($semesters as $semester)
                    <div class="semester-list">
                        <h2> {{ $semester->semester }} </h2>
                        <table>
                            <?php $count = 1 ?>
                            @foreach($semester->matkul as $mk)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td><a href="{{ route('course', $mk->id) }}">{{ $mk->matkul }}</a></td>
                                    <td><p></p></td>
                                    <td><p></p></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
            <div class="uploaded-container">
                <h3>Baru Diopload</h3>
                @foreach ($materis as $materi)
                    <div class="uploaded-list">
                        <div class="admin-time">
                            <p>Admin : Valasinov Kormeno</p>
                            <p>{{ $materi->created_at->format('d-m-Y') }} <span>{{ $materi->created_at->format('H:i:s') }}</span></p>
                        </div>
                        <div class="content">
                            <img src="{{ asset('images/programming.jpg') }}" alt="" class="bg">
                            <div class="description">
                                <p>Judul : {{ $materi->judul }}</p>
                                <p>Mata kuliah : {{ $materi->matkul->matkul }}</p>
                                <p>Semester : {{ $materi->semester_id }}</p>
                                <p>Kategori : {{ $materi->ebook }} {{ $materi->ppt }} {{ $materi->contoh_soal }}</p>
                                {{-- <div class="file">
                                    <p class="file">For loop.pdf dan 2 lainnya</p>
                                    <img src="/assets/icon/bi_file-earmark-text.png" alt="">
                                </div> --}}
                            </div>                        
                        </div>
                        <div class="action-buttons">
                            <button class="button grey"> <a style="color:black;" href="{{ route('show', $materi->id) }}">View</a> <img src="/assets/icon/material-symbols_view-carousel-outline-rounded.png" alt=""></button>
                            <form action="{{ route('edit', $materi) }}" method="GET">
                                @csrf
                                <button type="submit" class="button green">Edit <img src="/assets/icon/material-symbols_edit-outline-rounded.png" alt=""></button>
                            </form>
                            <form action="{{ route('materi.destroy', $materi) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="button red">Delete <img src="/assets/icon/mdi_trash-can-outline.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <script src="{{ asset('js/nav.js') }}"></script> 
</body>
</html>