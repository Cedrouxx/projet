<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Studio;

class StudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studio::create([
            'name' => 'Moon Studio',
            'logo' => 'https://i.pinimg.com/736x/4d/34/01/4d3401acdbb0d0edb3f9670cf5e5eff5--photo-studio-logo-design-studio-logo.jpg'
        ]);
    }
}
