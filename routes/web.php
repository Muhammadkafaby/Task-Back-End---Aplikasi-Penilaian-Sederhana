<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/siswa',  [SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/nilaitertinggi', [SiswaController::class, 'nilaiTertinggi'])->name('siswa.nilaitertinggi');
Route::get('/siswa/nilaikelastertinggi', [SiswaController::class, 'showNilaiTertinggi'])->name('siswa.shownilaitertinggi');
Route::get('/siswa/{id}/nilai', [SiswaController::class, 'show'])->name('siswa.shownilai');


require __DIR__.'/auth.php';