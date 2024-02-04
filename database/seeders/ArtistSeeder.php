<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * @var string
     */
    protected string $model = Artist::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'name' => 'Dora',
                'description' => 1111,
                'song_id' => 1
            ],
            [
                'name' => 'Morgenstern',
                'description' => 1111,
                'song_id' => 1
            ],
            [
                'name' => 'Big baby tape',
                'description' => 1111,
                'song_id' => 1
            ],
            [
                'name' => 'Kai angel',
                'description' => 1111,
                'song_id' => 1
            ],
            [
                'name' => '9mice',
                'description' => 1111,
                'song_id' => 1
            ],
        ]);
    }
}
