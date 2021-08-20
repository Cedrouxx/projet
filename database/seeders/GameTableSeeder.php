<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'title' => 'Ori and the blind forest',
            'mark' => 9,
            'image' => '...',
            'description' => 'Jeu trop bien',
            'price' => 19.90,
            'release_date' => '2015-03-11',
            'studio_id' => 1
        ]);
    }
}
