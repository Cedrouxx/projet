<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('games')->insert([
        [
            'title' => 'Ori and the blind forest',
            'mark' => 9,
            'image' => 'https://store-images.s-microsoft.com/image/apps.48128.64380020109914519.db17d3d9-50d5-4f2b-b4a4-ac5d6eb8b882.92165fa8-40cf-4dec-ae2f-264804299afb',
            'description' => 'Jeu trop bien',
            'price' => 19.90,
            'release_date' => '2015-03-11',
            'studio_id' => 1
        ],
        [
            'title' => 'sonic',
            'mark' => 9,
            'image' => 'https://play-lh.googleusercontent.com/4F-WwVKAs56rT6DGSfu1-9sW4MqSjenlIUqWS1K_8iB25ktsHKXXScAwJonvwo7DuMA',
            'description' => 'Jeu trop bien',
            'price' => 19.90,
            'release_date' => '2015-03-11',
            'studio_id' => 1
        ]
      
    ]);
        
    }
}
