<?php

namespace Database\Seeders;

use App\Models\Penjahit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjahitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjahit::create([
            'user_id'               => '1',
            'jenis_kelamin'         => 'laki_laki',
            'no_hp'                 => '088217723694',
            'alamat'                => 'bumi marina emas iv no 19',
            'link_iframe'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5408936933745!2d112.80044207486469!3d-7.2929584927145426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb61110c84db%3A0x829b9d8391aafea9!2sMEB%20OFFICE%20IV%2F19!5e0!3m2!1sid!2sid!4v1683179116852!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
            'tanggal_lahir'         => '1990-06-05',
            'kategori'              => 'penjahit',
            'jenis_layanan'         => 'Jahit Pakaian Perempuan',
            'deskripsi'             => 'Muklis adalah penjahit berpengalaman dengan spesialisasi dalam pembuatan pakaian formal. Ia telah melayani pelanggan dari berbagai kalangan dan senang bekerja dengan kain-kain berkualitas tinggi. Selain itu, ia juga menerima permintaan untuk desain kustom sesuai dengan keinginan pelanggan.',
            'kecamatan'             => 'Sukolilo',
            'jam_buka'              => '07.00',
            'jam_tutup'             => '20.00',
            'thumbnail'             => 'img-thumbnail/IyDsARPLUT2LsBQJppTxUuMn4F5cNN6SP1OmQNhV.jpg',
            ]);
    }
}
