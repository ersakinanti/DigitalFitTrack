<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('latihans', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id sebagai primary key
            $table->string('nama_pengguna'); // Menambahkan kolom nama_pengguna
            $table->string('nama_latihan'); // Menambahkan kolom nama_latihan
            $table->string('kategori'); // Menambahkan kolom kategori
            $table->integer('durasi'); // Menambahkan kolom durasi
            $table->string('intensitas'); // Menambahkan kolom intensitas
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latihans'); // Menghapus tabel latihans jika migrasi dibatalkan
    }
};
