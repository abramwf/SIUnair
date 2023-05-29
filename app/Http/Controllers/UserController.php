<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Matkul;
use App\Models\Semester;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function landing() {
        return view('user/userLanding');
    }

    public function semester() {
        $matkuls = Matkul::all();
        $semesters = Semester::all();

        return view('user/userSemesters', compact('matkuls', 'semesters'));
    }
}
