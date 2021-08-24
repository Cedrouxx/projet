<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            ['name' => 'Steam', 'logo' => '...'],
            ['name' => 'Epic Games', 'logo' => '...'],
            ['name' => 'PS5', 'logo' => '...'],
            ['name' => 'Nintendo Switch', 'logo' => '...'],
            ['name' => 'XBox Series X', 'logo' => '...'],
            ['name' => 'Ubisoft Connect', 'logo' => '...'],
        ]);
    }
}
