<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        
        \App\Models\User::create([
            'username' => 'admin',
            'email' => 'admin@admin.fr',
            'email_verified_at' => now(),
            'password' => bcrypt('adminadmin'),
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);
        
        
        
        
    }
}
