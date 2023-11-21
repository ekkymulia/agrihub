<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Public\IndexController;
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


Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [AuthController::class, 'index_register'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/productlist', [DashboardController::class, 'product_list'])->name('product_list');
    Route::get('/addproduct', [DashboardController::class, 'add_product'])->name('add_product');
});

Route::prefix('/')->group(function () {
    
    // PUBLIK
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/deals', [IndexController::class, 'deals'])->name('deals');
    Route::get('/shop', [IndexController::class, 'shop'])->name('shop');
    Route::get('/vendors', [IndexController::class, 'vendors'])->name('vendors');
    Route::get('/chatbot', [IndexController::class, 'chatbot'])->name('chatbot');
    Route::get('/subscribe', [IndexController::class, 'subscribe'])->name('subscribe');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    
    // USER
    Route::get('/my-account', [ProfileController::class, 'index'])->name('my-account');


    // ADMIN
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});
