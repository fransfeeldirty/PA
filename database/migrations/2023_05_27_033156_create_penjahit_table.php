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
        Schema::create('penjahit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('alamat');
            $table->text('link_iframe');
            $table->string('tanggal_lahir');
            $table->string('kategori');
            $table->string('jenis_layanan');
            $table->text('deskripsi');
            $table->string('kecamatan');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->string('thumbnail');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjahit');
    }
};
