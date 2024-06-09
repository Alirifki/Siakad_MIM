<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Users
    Route::post('/user/store',[UserController::class, ('store')])->name('create_user');
    Route::get('/users',[UserController::class, 'index'])->name('view_users');
    Route::get('/user/tambah/{id}', [UserController::class, 'tambah'])->name('tambah_user');
    
    // Mapel
    Route::get('/mapel',[MapelController::class, 'index'])->name('view_mapel');

    // Guru
    Route::get('/guru',[GuruController::class, 'index'])->name('view_guru');
    Route::get('/guru/tambah', [GuruController::class, 'tambah'])->name('tambah_guru');
    Route::post('/guru/tambah', [GuruController::class, 'store'])->name('store_guru');
    Route::delete('/guru/{guru}',[GuruController::class, 'hapus'])->name('delete_guru');
    
    // kelas
    Route::get('/kelas',[KelasController::class, 'index'])->name('view_kelas');
    Route::get('/kelas/{kelas}',[KelasController::class, 'show'])->name('detail_kelas');
    Route::post('/siswa/tambah',[SiswaController::class, 'store'])->name('store_siswa');
    
    // Siswa
    Route::get('/siswa',[SiswaController::class, 'index'])->name('view_siswa');
    Route::get('/siswa/tambah',[SiswaController::class, 'tambah'])->name('tambah_siswa');
    
    // Nilai
    Route::get('/nilai',[NilaiController::class, 'view'])->name('view_nilai');
    Route::get('/nilai/input',[NilaiController::class, 'index'])->name('index_kelas');
    Route::get('/nilai/input/{kelas}',[NilaiController::class, 'input_nilai'])->name('input_nilai');
});

require __DIR__.'/auth.php';
