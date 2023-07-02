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
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('gambar')->nullable();
            $table->string('nama');
            $table->string('kategori');
            $table->text('detail');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
