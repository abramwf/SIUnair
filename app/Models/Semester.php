<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    public function matkul() {
        return $this->hasMany(Matkul::class);
    }

    public function materis() {
        return $this->hasMany(Materi::class);
    }
}
