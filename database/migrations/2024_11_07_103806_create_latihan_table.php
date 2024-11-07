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
        Schema::create('latihan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengguna');
            $table->string('nama_latihan');
            $table->string('kategori');
            $table->integer('durasi'); // dalam menit
            $table->string('intensitas'); // kolom tambahan
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('latihan');
    }
};
