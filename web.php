<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Route untuk autentikasi
Route::group(['prefix' => 'auth'], function() {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::get('/register-success', [AuthController::class, 'registerSuccess'])->name('register.success');
});

// Route untuk admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/add-category', [AdminController::class, 'addCategory'])->name('admin.add.category');
    Route::get('/edit-category/{id}', [AdminController::class, 'editCategory'])->name('admin.edit.category');
    Route::get('/subcategories', [AdminController::class, 'subcategories'])->name('admin.subcategories');
    Route::get('/add-subcategory', [AdminController::class, 'addSubcategory'])->name('admin.add.subcategory');
    Route::get('/edit-subcategory/{id}', [AdminController::class, 'editSubcategory'])->name('admin.edit.subcategory');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});

// Route untuk seller
Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function() {
    Route::get('/profile', [SellerController::class, 'profile'])->name('seller.profile');
    Route::get('/products', [SellerController::class, 'products'])->name('seller.products');
    Route::get('/add-product', [SellerController::class, 'addProduct'])->name('seller.add.product');
    Route::get('/edit-product/{id}', [SellerController::class, 'editProduct'])->name('seller.edit.product');
    Route::get('/settings', [SellerController::class, 'settings'])->name('seller.settings');
    Route::get('/home', [SellerController::class, 'home'])->name('seller.home');
});

// Route untuk frontend/public
Route::get('/', [FrontEndController::class, 'home'])->name('home');
Route::get('/products', [FrontEndController::class, 'products'])->name('products');
Route::get('/categories', [FrontEndController::class, 'categories'])->name('categories');

// Fitur user
Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [FrontEndController::class, 'profile'])->name('profile');
    Route::get('/cart', [FrontEndController::class, 'cart'])->name('cart');
    Route::get('/wishlist', [FrontEndController::class, 'wishlist'])->name('wishlist');
    Route::get('/compare', [FrontEndController::class, 'compare'])->name('compare');
    Route::get('/checkout', [FrontEndController::class, 'checkout'])->name('checkout');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});