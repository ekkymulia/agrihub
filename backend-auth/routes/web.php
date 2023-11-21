<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Private\DashboardController;
use App\Http\Controllers\Public\IndexController;
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

//Auth Route
Route::prefix('/auth')->group(function () {

    // jadi untuk mengakses link dibahwah ini, 
    // kita harus menambahkan /auth didepannya jadi misalnya /auth/login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/register', [AuthController::class, 'index_register'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('login');
});


// Public Routes (No Auth Required|Taro di sini)
Route::prefix('/')->group(function () {
    
    Route::get('/', [IndexController::class, 'index'])->name('index');

});


// Prive Routes (Auth Required|Taro routenya di dalem group)
Route::middleware(['auth', 'checkRoleAccess'])->group(function () {

    // Prefix itu gunanya untuk awalan misal dibawah ini itu /dashboard
    Route::prefix('/dashboard')->group(function () {

        // (/dashboard) -- default route untuk /dashboard mengacu ke controller berikut
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // dibawah ini berarti jadi (/dashboard/penjualan)
        // Route::get('/penjualan', [IndexController::class, 'dashboard'])->name('dashboard');

    });

});
