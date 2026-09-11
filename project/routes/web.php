<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('siswa.index');
});

Route::resource('siswa', SiswaController::class)->except(['show']);
Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('kelas/{kela}', [KelasController::class, 'destroy'])->name('kelas.destroy');
