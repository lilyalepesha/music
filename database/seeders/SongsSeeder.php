<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::query()->insert([
            [
                'name' => 'Дора дура',
                'price' => 100,
                'discount' => 20,
                'genre_id' => 1
            ],
            [
                'name' => 'Дора дура',
                'price' => 100,
                'discount' => 20,
                'genre_id' => 1
            ],
        ]);
    }
}
