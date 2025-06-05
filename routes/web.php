<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;

// Halaman utama (public)
Route::get('/', function () {
    return view('welcome');
});

// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticated'])->name('authenticated');
});

// Rute untuk user yang sudah login (dashboard dan admin)
Route::prefix('dashboard')->middleware('auth')->group(function () {

    // Halaman utama dashboard
    Route::get('overview', [DashboardController::class, 'index'])->name('dashboard.overview');

    // Manajemen produk
    Route::resource('product', ProductController::class);

    // Manajemen kategori
    Route::resource('category', CategoryController::class);

    // Pengaturan aplikasi
    Route::get('settings', [SettingsController::class, 'settings'])->name('settings');
    Route::post('settings', [SettingsController::class, 'store'])->name('settings.store');

    // Manajemen user/admin
    Route::resource('users', UserController::class);
});