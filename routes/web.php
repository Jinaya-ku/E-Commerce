<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProfileController;

Route::get('/', [EcommerceController::class,'index'])->name('home');

Route::middleware('guest')->group(function(){
// Rute untuk menampilkan Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
// Rute untuk menyimpan Login
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
// Rute untuk menampilkan register
Route::get('/register', [AuthController::class, 'register'])->name('register');
// Rute Untuk menyimpan register
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::middleware('auth')->group(function(){
//Rute logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('profile', [ProfileController::class,'index'])->name('profile');
Route::get('cart', [CartController::class,'index'])->name('cart');
Route::get('checkout', [CheckoutController::class,'index'])->name('checkout');

// Rute untuk menampilkan daftar produk
Route::get('/produks', [EcommerceController::class, 'index'])->name('ecommerce.index');

// Rute untuk menampilkan formulir pembuatan produk baru
Route::get('/produks/create', [EcommerceController::class, 'create'])->name('ecommerce.create');

// Rute untuk menyimpan produk baru
Route::post('/produks', [EcommerceController::class, 'store'])->name('ecommerce.store');

// Rute untuk menampilkan detail produk tertentu
Route::get('/produks/{id}', [EcommerceController::class, 'show'])->name('ecommerce.show');

// Rute untuk menampilkan formulir pengeditan produk
Route::get('/produks/{id}/edit', [EcommerceController::class, 'edit'])->name('ecommerce.edit');

// Rute untuk memperbarui produk yang sudah ada
Route::put('/produks/{id}', [EcommerceController::class, 'update'])->name('ecommerce.update');

// Rute untuk menghapus produk
Route::delete('/produks/{id}', [EcommerceController::class, 'destroy'])->name('ecommerce.destroy');
