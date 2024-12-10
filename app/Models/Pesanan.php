<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai konvensi Laravel)
    protected $table = 'pesanan';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_pelanggan',
        'email',
        'no_telepon',
        'tanggal_pesanan',
        'status',
        'total_harga',
        'catatan',
    ];

    // Mengaktifkan timestamps secara default
    // public $timestamps = true;
}
