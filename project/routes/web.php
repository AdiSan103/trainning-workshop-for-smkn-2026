<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AdminAuthController;

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('siswa.index');
});

Route::get('/fintech', function () {
    return view('fintech');
    // return redirect()->route('siswa.index');
});

Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('kelas/{kela}', [KelasController::class, 'show'])->name('kelas.show');
Route::get('kelas/{kela}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('kelas/{kela}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('kelas/{kela}', [KelasController::class, 'destroy'])->name('kelas.destroy');


Route::get('admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('admin/register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
Route::post('admin/register', [AdminAuthController::class, 'register'])->name('admin.register.post');

Route::get('/', function () {
    return redirect()->route('siswa.index');
});

Route::middleware('admin')->group(function () {
    Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
    // ... route siswa & kelas lainnya seperti Step 10

    Route::get('admin/dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/{admin}/edit', [AdminAuthController::class, 'edit'])->name('admin.edit');
    Route::put('admin/{admin}', [AdminAuthController::class, 'update'])->name('admin.update');
    Route::delete('admin/{admin}', [AdminAuthController::class, 'destroy'])->name('admin.destroy');

    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
