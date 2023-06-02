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

    public function about() {
        return view('user/about');
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
        $search = request('search');
        $query = Materi::where('matkul_id', $id);

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('judul', 'LIKE', '%' . $search . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $search . '%')
                        ->orWhere('file', 'LIKE', '%' . $search . '%');
                })
                ->orWhere(function ($query) use ($search) {
                    if (strtolower($search) == 'ppt') {
                        $query->where('ppt', 1);
                    } elseif (strtolower($search) == 'ebook') {
                        $query->where('ebook', 1);
                    } elseif (strtolower($search) == 'contoh soal' || strtolower($search) == 'contoh' || strtolower($search) == 'soal') {
                        $query->where('contoh_soal', 1);
                    }
                });
            });
        }

        $materi_paginates = $query->paginate(5);

        $materi_paginates->transform(function ($item) {
            $item->ppt = $item->ppt == 1 ? 'PPT' : '';
            $item->contoh_soal = $item->contoh_soal == 1 ? 'Contoh Soal' : '';
            $item->ebook = $item->ebook == 1 ? 'Ebook' : '';
            return $item;
        });

        return view('user/userMateri', compact('id', 'materis', 'matkuls', 'semesters', 'matkul_semesters', 'materi_paginates'));
    }

    public function view($id) {
        $materis = Materi::find($id);
        $matkuls = Matkul::all();
        $semesters = Semester::all();
        $materi_matkuls = Materi::where('matkul_id', $materis->matkul_id)->whereNotIn('id', [$id])->get();

        $materis = Materi::find($id);

        return view('user/userView', compact('materis', 'matkuls', 'semesters', 'materi_matkuls'));
    }

}
