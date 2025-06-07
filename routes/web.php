<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientController;

// Halaman utama (public)
Route::controller(ClientController::class)->group(function (){
    Route::get('/', 'index');
    Route::get('products', 'products');
    Route::get('product/{slug}', 'detailProduct');
    Route::get('category/{slug}', 'detailCategory');
    Route::get('search', 'search');
});

// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'authenticated'])->name('authenticated');
    Route::post('register', [AuthController::class, 'registerStore']);
});

// Rute untuk user yang sudah login (seller dan admin)
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::middleware('role:admin,seller')->group(function () {
        Route::get('overview', [DashboardController::class, 'index'])->name('dashboard.overview');
        Route::resource('products', ProductController::class);
    });
    Route::middleware('role:admin')->group(function (){
        Route::resource('category', CategoryController::class);
        Route::get('settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('settings/site', [SettingsController::class, 'updateSite']);
        Route::post('settings/contact', [SettingsController::class, 'updateContact']);
        Route::resource('users', UserController::class);
    });

});
