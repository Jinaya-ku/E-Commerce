<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('nama_pelanggan'); // Nama pelanggan
            $table->string('email')->nullable(); // Email pelanggan
            $table->string('no_telepon')->nullable(); // Nomor telepon pelanggan
            $table->date('tanggal_pesanan'); // Tanggal pesanan
            $table->string('status')->default('pending'); // Status pesanan
            $table->decimal('total_harga', 10, 2)->nullable(); // Total harga pesanan
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps(); // Menyediakan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
