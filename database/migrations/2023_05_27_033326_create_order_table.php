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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penjahit_id');
            $table->unsignedBigInteger('pemesan_id');
            $table->string('prefix')->default('NP');
            $table->string('nama_pesanan');
            $table->string('deskripsi_pesanan');
            $table->string('lampiran');
            $table->string('ukuran');
            $table->string('jenis_layanan');
            $table->string('jenis_kain');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->date('tanggal_pesanan');
            $table->enum('status_pesanan', ['pending', 'selesai', 'batal', 'diterima', 'tolak']);
            $table->boolean('verifikasi');
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('penjahit_id')->references('id')->on('penjahit');
            $table->foreign('pemesan_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
