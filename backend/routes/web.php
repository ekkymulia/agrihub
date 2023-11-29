<?php

use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Admin\AccountAdminController;
use App\Http\Controllers\Public\IndexController;
use GuzzleHttp\Handler\Proxy;
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
    Route::get('/login', [AccountController::class, 'index'])->name('login');
    Route::post('/login', [AccountController::class, 'authenticate'])->name('login');
    Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

    // Route::get('/register', [AuthController::class, 'index_register'])->name('register');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
    
    Route::get('/register', [AccountController::class, 'index_register'])->name('register');
    Route::post('/register', [AccountController::class, 'add_user'])->name('register');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/list_product', [DashboardController::class, 'product_list'])->name('product_list');
    Route::get('/addproduct', [DashboardController::class, 'add_product'])->name('add_product');
    Route::post('/addproduct', [ProductController::class, 'add_product'])->name('add_product');
    Route::get('/edit_product/{id}', [DashboardController::class, 'edit_product'])->name('editproduct');
    Route::post('/editproduct', [ProductController::class, 'edit_product'])->name('edit_product');
    Route::get('/deleteproduct/{id}', [ProductController::class, 'delete_product'])->name('delete_product');
    
    Route::get('/list_account', [DashboardController::class, 'list_account'])->name('list_account');
    Route::get('/add_account', [DashboardController::class, 'add_account'])->name('add_account');
    Route::post('/add_account', [AccountAdminController::class, 'add_account'])->name('add_account');
    Route::get('/edit_account/{id}', [DashboardController::class, 'edit_account'])->name('edit_account');
    Route::post('/editaccount', [AccountAdminController::class, 'edit_account'])->name('editaccount');
    Route::get('/delete_account/{id}', [AccountAdminController::class, 'delete_account'])->name('delete_account');
    
    Route::get('/settings', [DashboardController::class, 'setting_account'])->name('setting_account');
});

Route::prefix('/')->group(function () {
    
    // PUBLIK
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/deals', [IndexController::class, 'deals'])->name('deals');
    Route::get('/shop', [ProductController::class, 'list_product'])->name('shop');
    Route::get('/showproduct/{id}', [ProductController::class, 'show_product'])->name('show_product');
    Route::get('/vendors', [IndexController::class, 'vendors'])->name('vendors');
    Route::get('/chatbot', [IndexController::class, 'chatbot'])->name('chatbot');
    Route::get('/subscribe', [IndexController::class, 'subscribe'])->name('subscribe');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/vendor_details/{id}', [IndexController::class, 'vendor_details'])->name('vendor_details');
    
    
    // USER
    Route::get('/my-account', [ProfileController::class, 'index'])->name('my-account');


    // ADMIN
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});
