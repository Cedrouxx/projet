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
<<<<<<< HEAD
            'image' => 'https://store-images.s-microsoft.com/image/apps.48128.64380020109914519.db17d3d9-50d5-4f2b-b4a4-ac5d6eb8b882.92165fa8-40cf-4dec-ae2f-264804299afb',
=======
            'image' => 'https://global-img.gamergen.com/ori-and-the-blind-forest_0903D4000000798672.jpg',
>>>>>>> 2d8aece88ecdcbda73082d0244744ebe391dc650
            'description' => 'Jeu trop bien',
            'price' => 19.90,
            'release_date' => '2015-03-11',
            'studio_id' => 1
<<<<<<< HEAD
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
        
=======
        ]);
        
        Game::create([
            'title' => 'Ori will of the wisps',
            'mark' => 10,
            'image' => 'https://www.presse-citron.net/app/uploads/2020/03/test-ori-will-of-the-wisps.jpg',
            'description' => 'Jeu vraiment trop bien',
            'price' => 29.99,
            'release_date' => '2020-03-11',
            'studio_id' => 1
        ]);
        
        Game::create([
            'title' => 'Ratchet & clank: a crack in time',
            'mark' => 8,
            'image' => 'https://media.senscritique.com/media/000011131045/source_big/Ratchet_Clank_A_Crack_in_Time_Original_Soundtrack_Bande_Originale.jpg',
            'description' => 'Jeu avec un lombax',
            'price' => 39.90,
            'release_date' => '2009-10-27',
            'studio_id' => 1
        ]);
        
        Game::create([
            'title' => 'Child of light',
            'mark' => 7,
            'image' => 'https://store-images.s-microsoft.com/image/apps.18889.69016865837780293.9b6820fe-f7d4-4de3-9591-ae50b5b3401a.4d4a9107-6b96-429b-8a2b-03771d2eca9c',
            'description' => 'Je sais pas',
            'price' => 14.99,
            'release_date' => '2014-04-29',
            'studio_id' => 1
        ]);
        
        Game::create([
            'title' => 'Sea of solitude',
            'mark' => 8,
            'image' => 'https://media.contentapi.ea.com/content/dam/ea/sea-of-solitude/images/2018/06/sos-featured-image-16x9.jpg.adapt.crop191x100.1200w.jpg',
            'description' => 'Jeu psychologique',
            'price' => 21.99,
            'release_date' => '2019-07-05',
            'studio_id' => 1
        ]);
        
        Game::create([
            'title' => 'Undertale',
            'mark' => 8,
            'image' => 'https://image.jeuxvideo.com/medias/144430/1444298844-4196-jaquette-avant.png',
            'description' => 'Jeu multi-run',
            'price' => 9.99,
            'release_date' => '2015-09-15', 
            'studio_id' => 1
        ]);
>>>>>>> 2d8aece88ecdcbda73082d0244744ebe391dc650
    }
}
