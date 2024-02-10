<?php

namespace Database\Seeders;

use App\Enums\GenreEnum;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    protected string $model = Genre::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'title' => GenreEnum::POP->value,
            ],
            [
                'title' => GenreEnum::ALTERNATIVE_ROCK->value,
            ],
            [
                'title' => GenreEnum::HIP_HOP->value,
            ],
        ]);
    }
}
