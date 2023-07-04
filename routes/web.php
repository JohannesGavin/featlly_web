<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrderController;

Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('/detail/{id}', [PageController::class, 'detail'])->name('detail');
Route::get('/cart', [PageController::class, 'cart'])->name('cart')->middleware('auth');;
Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist')->middleware('auth');;
Route::get('/buy-info', [PageController::class, 'buyInfo'])->name('buy-info')->middleware('auth');;
Route::get('/create-order', [PageController::class, 'createOrder'])->name('create-order');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/order', [PageController::class, 'order'])->name('order')->middleware('auth');
Route::get('/order-history', [PageController::class, 'orderHistory'])->name('order-history')->middleware('auth');;

// Group routes for admin section
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/katalog', [AdminController::class, 'adminKatalog'])->name('katalog');
    Route::get('/pesanan', [AdminController::class, 'adminPesanan'])->name('pesanan');
    Route::get('/add-katalog', [AdminController::class, 'addKatalogView'])->name('tambah-katalog');
    Route::post('/add-katalog', [KatalogController::class, 'store'])->name('store-katalog');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(PageController::class)->group(function () {
    Route::post('/create-order/{id}', 'orderInfo')->name('create-order-info');
});

Route::controller(OrderController::class)->group(function () {
    Route::post('/complete-order', 'addOrder')->name('complete-order');
});