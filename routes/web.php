<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', [AuthController::class, 'logout']);
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticated'])->name('authenticated');
});
Route::prefix('dashboard')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('overview', [DashboardController::class, 'index']);
        Route::resource('product', ProductController::class);
        Route::resource('category', CategoryController::class);
        Route::get('settings', [SettingsController::class, 'settings']);
        Route::post('settings', [SettingsController::class, 'store']);
        Route::resource('users', UserController::class);
    });
});
