<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordSeeder extends Seeder
{
    /**
     * @var string
     */
    protected string $model = Record::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('records')->insert([
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
            [
                'name' => 'DANCE LIKE U IN PAIN',
                'price' => 50000,
                'discount' => 60,
                'genre_id' => 3
            ],
        ]);
    }
}
