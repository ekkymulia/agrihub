<?php

use App\Http\Controllers\Public\IndexController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::prefix('/')->group(function () {
    
//     Route::get('/admin/dashboard', [DashboardController::class, 'index']);

// });

Route::prefix('/')->group(function () {
    
    // PUBLIK
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/deals', [IndexController::class, 'deals']);
    Route::get('/shop', [IndexController::class, 'shop']);
    Route::get('/vendors', [IndexController::class, 'vendors']);
    Route::get('/chatbot', [IndexController::class, 'chatbot']);
    Route::get('/subscribe', [IndexController::class, 'subscribe']);
    Route::get('/contact', [IndexController::class, 'contact']);
    
    Route::get('/register', [IndexController::class, 'register']);
    Route::get('/login', [IndexController::class, 'login']);
    
    // USER
    Route::get('/profile', [ProfileController::class, 'index']);


    // ADMIN
    Route::get('/admin', [DashboardController::class, 'index']);

});
