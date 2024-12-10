<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'keranjang';

    // Kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'produk_id',
        'jumlah',
        'harga',
        'total_harga',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke model Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
