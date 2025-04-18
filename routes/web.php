<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FrsController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('frs', FrsController::class);
Route::resource('mata-kuliah', MatkulController::class);
Route::resource('jadwal', JadwalKuliahController::class);
Route::resource('dosen', DosenController::class);
Route::resource('nilai', NilaiController::class);

