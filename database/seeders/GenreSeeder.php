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
        foreach (GenreEnum::cases() as $item) {
            Genre::query()->create([
               'title' => $item->value
            ]);
        }
    }
}
