<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Models\Cart;
use App\Models\Katalog;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('/detail/{id}', [PageController::class, 'detail'])->name('detail');
Route::get('/create-order', [CartController::class, 'createOrderPages'])->name('create-order');
Route::get('/profil', [PageController::class, 'profil'])->name('profil')->middleware('verified');

// Group routes for logged user only
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cart', [CartController::class, 'cartPages'])->name('cart');
    Route::get('/wishlist', [WishlistController::class, 'wishlistPages'])->name('wishlist');
    Route::get('/buy-info', [PageController::class, 'buyInfo'])->name('buy-info');
    Route::get('/confirm/{orderId}', [CartController::class, 'confirmOrder'])->name('confirm');
    Route::put('/confirm/{orderId}', [CartController::class, 'confirmPost'])->name("confirm-post");
    Route::post('/accept/{orderId}', [CartController::class, 'acceptPost'])->name("acc-post");
    Route::post('/reject/{orderId}', [CartController::class, 'rejectPost'])->name("reject-post");
    Route::get('/order', [PageController::class, 'order'])->name('order');
    Route::get('/order-history', [PageController::class, 'orderHistory'])->name('order-history');
    Route::post('/add/{katalogId}', [CartController::class, 'store'])->name("add-to-cart");
    Route::put('/inc/{cartId}', [CartController::class, 'incrementCount'])->name("inc-cart");
    Route::put('/dec/{cartId}', [CartController::class, 'decrementCount'])->name("dec-cart");
    Route::delete('/del/{cartId}', [CartController::class, 'destroy'])->name("delete-cart");
    Route::post('/add-wishlist/{katalogId}', [WishlistController::class, 'store'])->name("add-to-wishlist");
    Route::post('/add-to-cart/{wishlistId}', [WishlistController::class, 'addToCart'])->name("add-to-cart-wishlist");
    Route::delete('/del-wishlist/{wishlistId}', [WishlistController::class, 'destroy'])->name("delete-wishlist");
});

// Group routes for admin section
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/pesanan', [AdminController::class, 'adminPesanan'])->name('pesanan');
    Route::resource('katalog', KatalogController::class);
    // Route::get('/katalog', [AdminController::class, 'adminKatalog'])->name('katalog');
    // Route::get('/add-katalog', [AdminController::class, 'addKatalogView'])->name('tambah-katalog');
    // Route::post('/add-katalog', [KatalogController::class, 'store'])->name('store-katalog');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('verified');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(PageController::class)->group(function () {
    Route::post('/create-order/{id}', 'orderInfo')->name('create-order-info');
    Route::post('/create-order-save/{id}', 'orderInfoSave')->name('create-order-info-save');
});

Route::controller(OrderController::class)->group(function () {
    Route::post('/complete-order', 'addOrder')->name('complete-order');
});

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home')->with("success", "Email berhasil diverifikasi!");
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi berhasil dikirimkan!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
