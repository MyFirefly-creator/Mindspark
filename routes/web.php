<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});
