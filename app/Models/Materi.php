<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'foto',
        'ebook',
        'ppt',
        'contoh_soal',
        'deskripsi',
        'file',
        'semester_id',
        'matkul_id'
    ];

    public function semester() {
        return $this->belongsTo(Semester::class);
    }

    public function matkul() {
        return $this->belongsTo(Matkul::class);
    }

}
