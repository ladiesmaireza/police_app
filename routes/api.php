<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiclesControlle;

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes with Sanctum middleware
Route::group(['prefix' => 'panel-control', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/vehicles', [VehiclesControlle::class, 'index']);
    Route::post('/vehicles', [VehiclesControlle::class, 'store']);
    Route::get('/vehicles/{vehicle}', [VehiclesControlle::class, 'show']);
    Route::put('/vehicles/{vehicle}', [VehiclesControlle::class, 'update']);
    Route::delete('/vehicles/{vehicle}', [VehiclesControlle::class, 'destroy']);
});
