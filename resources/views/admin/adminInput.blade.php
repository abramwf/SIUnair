<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/adminInput.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env.css') }}">
    <title>Admin Input</title>
</head>
<body>
    <nav class="navbars">
        <div class="nav-container">
            <div class="nav-list">
                <a href="{{ route('adminHome') }}" class="a-nav">Home</a>
                <div class="status-container">
                    <div class="hover-admin">
                        <img class="image-hover" id="img" src="{{ asset('images/admin.png') }}" alt="">
                        <div class="hover-container" id="hover">
                            <p>Selamat datang !!</p>
                            <p>{{ $admin->name }}</p>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}" class="a-nav">log out</a>
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="status-container none">
                <div class="hover-admin">
                    <img class="image-hover" id="img2" src="{{ asset('images/admin.png') }}" alt="">
                    <div class="hover-container" id="hover2">
                        <p>Selamat datang !!</p>
                        <p>{{ $admin->name }}</p>
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="a-nav">log out</a>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </nav>
    <div class="head">
        <center><h1>Input Materi</h1></center>
    </div>
    <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-input">
            <label for="judul"> Judul </label>
            <input type="text" id="title" name="judul">
        </div>
        <div class="form-input bebas">
            <div class="semester-container">
                <label for="smt">Semester </label>
                <select name="semester_id" id="smt" required>
                    @foreach ($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                    @endforeach
                </select>
            </div>
            <div class="kategori-container">
                <label for="kategori"> Kategori </label>
                <div class="kategori-container-list">
                    <div class="kategori-container-list-item">
                        <input type="checkbox" id="ebook" name="ebook">
                        <label for="ebook">Ebook</label>
                    </div>
                    <div class="kategori-container-list-item">
                        <input type="checkbox" id="ppt" name="ppt">
                        <label for="ppt">PPT</label>    
                    </div>
                    <div class="kategori-container-list-item">
                        <input type="checkbox" id="consol" name="contoh_soal">
                        <label for="consol">Contoh Soal</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-input">
            <label for="matkul">Nama Mata Kuliah </label>
            <select name="matkul_id" id="matkul" required>
                @foreach ($matkuls as $matkul)
                    <option value="{{ $matkul->id }}" data-semester-id="{{ $matkul->semester_id }}">{{ $matkul->matkul }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-input">
            <label>Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi"></textarea>
        </div>
        <div class="form-input">
            <label for="file">Link Drive</label>
            <input type="text" name="file">
        </div>
        <button type="submit" class="button a-button">
           Submit
        </button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#smt').val('');
        $('#matkul').val('').prop('disabled', true); 

        $('#smt').change(function() {
            var selectedSemesterId = $(this).val();

            if (selectedSemesterId === '') {
                $('#matkul').val('').prop('disabled', true); 
                return;
            }

            $('#matkul').prop('disabled', false); 

            $('#matkul option').each(function() {
                var semesterId = $(this).data('semester-id');

                if (semesterId == selectedSemesterId || semesterId === undefined) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });

    $('#smt').click(function() { 
        $('#matkul').val('');
    });
    </script>
    <script src="{{ asset('js/adminInput.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>