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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->integer('jumlah'); // Jumlah barang
            $table->decimal('harga', 10, 2); // Harga per item
            $table->decimal('total_harga', 10, 2); // Total harga = jumlah x harga
            $table->timestamps(); // Created at dan Updated at

            // Foreign key constraints
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('produk_id')->references('id')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
