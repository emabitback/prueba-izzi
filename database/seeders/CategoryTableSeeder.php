<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $categories = [
            ['name_category' => 'Electronica'],
            ['name_category' => 'Linea Blanca'],
            ['name_category' => 'Deportes'],
            ['name_category' => 'Alimentos'],
            ['name_category' => 'Jardin']
        ];
        
        DB::table('category')->insert($categories);
    }
}
