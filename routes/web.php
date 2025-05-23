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

// Login routes (guest only)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

// Protected routes (after login)
Route::middleware(['auth'])->group(function () {

    // Home / Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    // Resource Controllers
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('frs', FrsController::class);
    Route::resource('mataKuliah', MataKuliahController::class);
    Route::resource('jadwal', JadwalKuliahController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('nilai', NilaiController::class);

    // Jika ingin custom route untuk create nilai (sebenarnya sudah include di resource)
    // Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');

});
