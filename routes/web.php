<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FrsController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index']);

// Route::get('/nilai/{nilai}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('frs', FrsController::class);
Route::resource('mataKuliah', MataKuliahController::class);
Route::resource('jadwal', JadwalKuliahController::class);
Route::resource('dosen', DosenController::class);
Route::resource('nilai', NilaiController::class);


