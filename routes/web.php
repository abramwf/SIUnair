<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\UserController;
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
    return view('user/UserLanding');
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

Route::get('/admin/adminView', [MateriController::class, 'search'])->name('searchMateri');


Route::get('/user/userLanding', [UserController::class, 'landing'])->name('userLanding');

Route::get('/user/userSemesters', [UserController::class, 'semester'])->name('userSemesters');

Route::get('/user/userMateri/{id}', [UserController::class, 'materi'])->name('userMateri');

Route::get('/user/userView/{id}', [UserController::class, 'view'])->name('userView');
