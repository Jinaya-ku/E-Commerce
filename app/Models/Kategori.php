<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Nama tabel (opsional, hanya jika berbeda dengan konvensi Laravel)
    protected $table = 'kategori';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_kategori',
        'slug',
        'deskripsi'
    ];

    // Tambahkan jika Anda tidak ingin menggunakan timestamps
    // public $timestamps = false;
}
