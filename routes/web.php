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
    return view('admin/adminHome');
});

Route::resource('materi', MateriController::class)->except(['update']);

Route::get('/admin/adminHome', [MateriController::class, 'home'])->name('adminHome');

Route::get('/admin/adminList', [MateriController::class, 'list'])->name('adminList');

Route::get('/admin/adminView/{id}', [MateriController::class, 'course'])->name('course');

Route::get('/admin/adminShow/{id}', [MateriController::class, 'show'])->name('show');

Route::post('materi/create', [MateriController::class, 'store'])->name('materi.create');

Route::get('/admin/adminEdit/{materis}', [MateriController::class, 'edit'])->name('edit');

Route::put('/admin/adminEdit/{materis}', [MateriController::class, 'update'])->name('materi.update');

Route::delete('/admin/destroy/{materis}', [MateriController::class, 'destroy'])->name('materi.destroy');
