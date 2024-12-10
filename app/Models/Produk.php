<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel (opsional, hanya jika berbeda dengan konvensi Laravel)
    protected $table = 'produk';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'kategori',
        'gambar',
    ];

    // Tambahkan jika Anda ingin menggunakan timestamps secara otomatis
    // public $timestamps = true;

    // Tanggal yang dikelola oleh soft delete
    protected $dates = ['deleted_at'];
}
