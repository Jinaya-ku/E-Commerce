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
        Schema::create('produk', function (Blueprint $table) {
            $table->id(); // ID unik auto increment
            $table->string('nama', 255); // Nama produk
            $table->text('deskripsi')->nullable(); // Deskripsi produk
            $table->decimal('harga', 10, 2); // Harga dengan 2 angka desimal
            $table->integer('stok'); // Jumlah stok
            $table->string('kategori', 100)->nullable(); // Kategori produk
            $table->string('gambar')->nullable(); // URL gambar produk
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
            $table->softDeletes(); // Kolom deleted_at untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
