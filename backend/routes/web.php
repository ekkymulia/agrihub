<?php

use App\Http\Controllers\Public\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/')->group(function () {
    
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

});

Route::prefix('/')->group(function () {
    
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/shop', [IndexController::class, 'shop']);
    Route::get('/vendors', [IndexController::class, 'vendors']);
    Route::get('/chatbot', [IndexController::class, 'chatbot']);
    Route::get('/contact', [IndexController::class, 'contact']);
    
    Route::get('/register', [IndexController::class, 'register']);
    Route::get('/login', [IndexController::class, 'login']);
});
