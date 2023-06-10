<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Http\Requests\StoreMateriRequest;
use App\Http\Requests\UpdateMateriRequest;
use App\Models\Matkul;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function home() {
        $admin = Auth::user();
        return view('admin/adminHome', compact('admin'));
    }

    public function list() {
        $materis = Materi::latest()->take(3)->get();;
        $matkuls = Matkul::all();
        $semesters = Semester::all();
        $admin = Auth::user();

        $materis->transform(function ($item) {
            $item->ppt = $item->ppt == 1 ? 'PPT' : '';
            $item->contoh_soal = $item->contoh_soal == 1 ? 'Contoh Soal' : '';
            $item->ebook = $item->ebook == 1 ? 'Ebook' : '';
            return $item;
        });

        return view('admin/adminList', compact('materis', 'matkuls', 'semesters', 'admin'));
    }

    public function course($id)
    {
        $matkuls = Matkul::find($id);
        $materis = Materi::where('matkul_id', $id)->get();
        $semesters = Semester::all();
        $search = request('search');
        $query = Materi::where('matkul_id', $id);
        $admin = Auth::user();

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

        return view('admin/adminView', compact('id', 'materis', 'matkuls', 'semesters', 'materi_paginates', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $semesters = Semester::all();
        $matkuls = Matkul::all();
        $admin = Auth::user();
        return view('admin/adminInput', compact('semesters', 'matkuls', 'admin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMateriRequest $request)
    {
        $request->validate([
            'judul' => 'required',
        ]);

        $requestData = $request->all();

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('images', 'public');
            $requestData['foto'] = $imagePath;
        }

        $requestData["ebook"] = $request->has('ebook');
        $requestData["ppt"] = $request->has('ppt');
        $requestData["contoh_soal"] = $request->has('contoh_soal');
        Materi::create($requestData);


        // return Redirect::route('adminView');
        return Redirect::route('adminList');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $materis = Materi::all();
        $matkuls = Matkul::all();
        $semesters = Semester::all();
        $admin = Auth::user();

        $materis->transform(function ($item) {
            $item->ppt = $item->ppt == 1 ? 'PPT' : '';
            $item->contoh_soal = $item->contoh_soal == 1 ? 'Contoh Soal' : '';
            $item->ebook = $item->ebook == 1 ? 'Ebook' : '';
            return $item;
        });

        $materis = Materi::find($id);

        return view('admin/adminShow', compact('materis', 'matkuls', 'semesters', 'admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materis)
    {
        $matkuls = Matkul::all();
        $semesters = Semester::all();
        $admin = Auth::user();
        return view('admin/adminEdit', compact('materis', 'matkuls', 'semesters', 'admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMateriRequest $request, Materi $materis)
    {
        $requestData = $request->all();
        $materis->update($requestData);
        return Redirect::route('adminList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materis)
    {
        $materis->delete();
        return Redirect::route('adminList');
    }
}
