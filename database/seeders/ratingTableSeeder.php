<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ratingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rating::factory(100)->create();
    }
}
