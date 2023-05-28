<?php

use App\Http\Controllers\MateriController;
use App\Models\Materi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('adminHome');
});

Route::resource('materi', MateriController::class)->except(['update']);

Route::get('/adminHome', [MateriController::class, 'home'])->name('adminHome');

Route::get('/adminList', [MateriController::class, 'list'])->name('adminList');

Route::get('/adminView/{id}', [MateriController::class, 'course'])->name('course');

Route::get('/adminShow/{id}', [MateriController::class, 'show'])->name('show');

Route::post('/materi/create', [MateriController::class, 'store'])->name('materi.create');

Route::get('/adminEdit/{materis}', [MateriController::class, 'edit'])->name('edit');

Route::put('/adminEdit/{materis}', [MateriController::class, 'update'])->name('materi.update');

Route::delete('/destroy/{materis}', [MateriController::class, 'destroy'])->name('materi.destroy');
