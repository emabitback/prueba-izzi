<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            ['profile_name' => 'Administrador'],
            ['profile_name' => 'Capturista']
        ];
        
        DB::table('profile')->insert($profiles);
    }
}
