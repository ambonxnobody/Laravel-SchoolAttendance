<?php

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Presensi;
use App\Models\Siswa;
use App\Models\User;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Login Routes
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Resgister Routes
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Home Routes
Route::get('/', function () {
    return view('home.contents.welcome', [
        'title' => 'Dashboard',
        'siswa' => Siswa::count(),
        'guru' => User::count(),
        'mapel' => Mapel::count(),
        'kelas' => Kelas::count(),
        'presensis' => Presensi::where('absensi_id', '!=', 2)->latest()->get()
    ]);
})->middleware('auth');

// Siswa Export and Import Routes
Route::resource('/siswa', SiswaController::class)->middleware('auth');
Route::get('export', [SiswaController::class, 'export'])->name('export')->middleware('auth');
Route::post('import', [SiswaController::class, 'import'])->name('import')->middleware('auth');

// Controller Resources
Route::resource('/kelas', KelasController::class)->except(['show'])->middleware('auth');
Route::resource('/mapel', MapelController::class)->except(['show'])->middleware('auth');
Route::resource('/keteranganPresensi', AbsensiController::class)->except(['show'])->middleware('auth');
Route::resource('/guru', UserController::class)->middleware('auth');


// Presensi Routes
Route::get('/presensi', [PresensiController::class, 'indexinti'])->middleware('auth');
Route::post('/presensi', [PresensiController::class, 'store'])->middleware('auth');
Route::get('/presensi/{mapel}/create', [PresensiController::class, 'create'])->middleware('auth');
// Route::get('/mapel/{id}/presensi/{created_at}', [PresensiController::class, 'show'])->middleware('auth');

// Riwayat Presensi Routes
Route::resource('/riwayatPresensi', PresensiController::class)->only('index', 'show')->middleware('auth');

// Profile Routes
Route::resource('/profile', ProfileController::class)->only('show', 'update')->middleware('auth');
