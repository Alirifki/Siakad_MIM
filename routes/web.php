<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Models\Jadwal;
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
    Route::get('/user/tambah/{id}/{table}', [UserController::class, 'tambah'])->name('tambah_user');
    
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
    
    // Siswa
    Route::get('/siswa',[SiswaController::class, 'index'])->name('view_siswa');
    Route::get('/siswa/tambah',[SiswaController::class, 'tambah'])->name('tambah_siswa');
    Route::post('siswa/tambah',[SiswaController::class, 'store'])->name('store_siswa');
    Route::post('siswa/{id}',[SiswaController::class],'hapus')->name('delete_siswa');
    
    // Nilai
    Route::get('/nilai/input',[NilaiController::class, 'index'])->name('index_kelas');
    Route::get('/nilai/{kelas}',[NilaiController::class, 'input'])->name('input');
    Route::get('/nilai/show',[NilaiController::class, 'show'])->name('show_nilai');
    Route::delete('/niali/{nilai}',[NilaiController::class, 'delete_nilai'])->name('delete_nilai');
    Route::get('/nilai/input/{id}',[NilaiController::class,'getsiswa'])->name('nilai_input');
 

    //Jadwal
    Route::get('/jadwal',[JadwalController::class, 'index'])->name('jadwal');
    Route::get('jadwal/buat', [JadwalController::class, 'buat'])->name('buat_jadwal');
    Route::post('jadwal/buat', [JadwalController::class, 'store'])->name(('store_jadwal'));
    Route::get('jadawl/{hari}',[JadwalController::class,'show'])->name('show');

    //Raport 

    Route::get('/raport',[RaportController::class,'raport'])->name('raport');
    Route::post('/nilai/input/{id}',[RaportController::class, 'store_raport'])->name('');
});

require __DIR__.'/auth.php';
