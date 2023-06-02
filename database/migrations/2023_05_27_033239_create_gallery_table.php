<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penjahit_id');
            $table->string('judul');
            $table->string('gambar');
            $table->timestamps();
            $table->foreign('penjahit_id')->references('id')->on('penjahit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
