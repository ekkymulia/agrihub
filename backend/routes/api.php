<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/auth')->group(function () {
    // Route::get('/login', [AuthController::class, 'index'])->name('api_login');
    Route::post('/login', [AccountController::class, 'authenticateViaApi'])->name('api_login');
    Route::get('/logout', [AuthController::class, 'logoutViaApi'])->name('api_logout');

    // Route::get('/register', [AuthController::class, 'index_register'])->name('register');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
    
    Route::get('/register', [AuthController::class, 'index_register'])->name('api_register');
    Route::post('/register', [AccountController::class, 'add_user'])->name('api_register');
});

Route::get('/list-product', [ProductController::class, 'api_product_list'])->name('api_product_list');