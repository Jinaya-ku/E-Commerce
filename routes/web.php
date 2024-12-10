<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;

Route::get('/', function () {
    return view('welcome');
});

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
