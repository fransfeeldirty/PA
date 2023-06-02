<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'penjahit_id'       => 1,
            'pemesan_id'       => 2,
            'nama_pesanan'         => 'Jahit Kemeja',
            'deskripsi_pesanan'      => 'kecilin dibagian dada',
            'lampiran'      => 'img-gallery/HTF0CUBKvRsrTY7eGSvQuLKr7PBOeAqCMKVuX3in.jpg',
            'ukuran'      => '60x70',
            'jenis_layanan'      => 'Jahit Kemeja Pria',
            'jenis_kain'      => 'Flanel',
            'alamat'      => 'Marina emas barat iv no 19',
            'kecamatan'      => 'sukolilo',
            'tanggal_pesanan'      => '2023-05-27',
            'status_pesanan'      => 'pending',
            'verifikasi'      => '0',

        ]);
    }
}
