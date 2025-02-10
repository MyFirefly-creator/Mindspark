<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\WarningController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KategoriBukuController;

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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::prefix('sesi')->group(function () {
    Route::get('/login', [UserController::class, 'loginForm'])->name('loginForm');
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'registerForm'])->name('registerForm');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard.index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/ban', [BanController::class, 'index'])->name('ban.index');
    Route::post('/ban', [BanController::class, 'store'])->name('ban.store');

    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    Route::get('/kategori_buku', [KategoriBukuController::class, 'index'])->name('kategori_buku.index');
    Route::get('/kategori_buku/create', [KategoriBukuController::class, 'create'])->name('kategori_buku.create');
    Route::post('/kategori_buku', [KategoriBukuController::class, 'store'])->name('kategori_buku.store');
    Route::get('/kategori_buku/{kategoriBuku}/edit', [KategoriBukuController::class, 'edit'])->name('kategori_buku.edit');
    Route::put('/kategori_buku/{kategoriBuku}', [KategoriBukuController::class, 'update'])->name('kategori_buku.update');
    Route::delete('/kategori_buku/{kategoriBuku}', [KategoriBukuController::class, 'destroy'])->name('kategori_buku.destroy');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('peminjaman/{peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('peminjaman/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::delete('peminjaman/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');


    Route::post('warnings', [WarningController::class, 'store'])->name('warnings.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('peminjaman/{peminjaman}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::get('laporan-peminjaman', [PeminjamanController::class, 'laporan'])->name('peminjaman.laporan');

    Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');

    Route::get('/favorit', [FavoritController::class, 'index'])->name('favorit.index');
    Route::post('/favorit', [FavoritController::class, 'store'])->name('favorit.store');
    Route::delete('/favorit/{id}', [FavoritController::class, 'destroy'])->name('favorit.destroy');

    Route::get('buku/{bukuID}', [BukuController::class, 'show'])->name('buku.show');
    Route::post('ulasans/{bukuID}', [UlasanController::class, 'store'])->name('ulasans.store');
});

