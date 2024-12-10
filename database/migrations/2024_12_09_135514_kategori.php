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
        Schema::create('kategori', function (Blueprint $table) {
            $table->id(); // Primary Key, auto increment
            $table->string('nama_kategori', 100); // Nama kategori dengan panjang maksimum 100 karakter
            $table->string('slug', 150)->unique(); // Slug unik untuk URL
            $table->text('deskripsi')->nullable(); // Deskripsi kategori, opsional
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
