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

    public function materi($id)
    {
        $matkuls = Matkul::find($id);
        $materis = Materi::where('matkul_id', $id)->get();
        $semesters = Semester::all();
        $matkul_semesters = Matkul::where('semester_id', $matkuls->semester_id)->whereNotIn('id', [$id])->get();
        $materi_paginates = Materi::where('matkul_id', $id)->paginate(2);

        $materi_paginates->transform(function ($item) {
            $item->ppt = $item->ppt == 1 ? 'PPT' : '';
            $item->contoh_soal = $item->contoh_soal == 1 ? 'Contoh Soal' : '';
            $item->ebook = $item->ebook == 1 ? 'Ebook' : '';
            return $item;
        });

        return view('user/userMateri', compact('materis', 'matkuls', 'semesters', 'matkul_semesters', 'materi_paginates'));
    }

    public function view($id) {
        $materis = Materi::find($id);
        $matkuls = Matkul::all();
        $semesters = Semester::all();
        $materi_matkuls = Materi::where('matkul_id', $materis->matkul_id)->whereNotIn('id', [$id])->get();

        // $materis->transform(function ($item) {
        //     $item->ppt = $item->ppt == 1 ? 'PPT' : '';
        //     $item->contoh_soal = $item->contoh_soal == 1 ? 'Contoh Soal' : '';
        //     $item->ebook = $item->ebook == 1 ? 'Ebook' : '';
        //     return $item;
        // });

        $materis = Materi::find($id);

        return view('user/userView', compact('materis', 'matkuls', 'semesters', 'materi_matkuls'));
    }

}
