<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'penjahit_id'       => '1',
            'judul'             => '1',
            'gambar'            => 'img-gallery/HTF0CUBKvRsrTY7eGSvQuLKr7PBOeAqCMKVuX3in.jpg'
        ]);
    }
}
