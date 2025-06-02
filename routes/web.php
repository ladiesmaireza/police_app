<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'loginPage'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register.page');

Route::prefix('panel-control')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/vehicles', [DashboardController::class, 'vehicles'])->name('vehicles');
    Route::get('/vehicles/{id}/edit', [DashboardController::class, 'edit'])->name('edit');
    Route::delete('/vehicles/{id}', [DashboardController::class, 'destroy'])->name('destroy');
    Route::put('/vehicles/{id}', [DashboardController::class, 'update'])->name('update');
    Route::post('/vehicles', [DashboardController::class, 'store'])->name('store');
});
