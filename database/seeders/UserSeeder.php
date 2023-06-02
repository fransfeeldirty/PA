<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Muklis Tailor',
            'email'         => 'muklis@gmail.com',
            'password'      => '$2y$10$LP8Ot6qzSY8a7sQjKfgFT.hKKFK/9RtF/v5mXPO..NUa6/TfjYnXG',
            'role_id'       => '0'
        ]);

        User::create([
            'name'          => 'Nafis',
            'email'         => 'nafis@gmail.com',
            'password'      => '$2y$10$LP8Ot6qzSY8a7sQjKfgFT.hKKFK/9RtF/v5mXPO..NUa6/TfjYnXG',
            'role_id'       => '1'
        ]);
    }
}
