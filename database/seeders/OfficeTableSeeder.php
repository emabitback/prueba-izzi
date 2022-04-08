<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $offices = [
            ['name_office' => 'Cuernavaca'],
            ['name_office' => 'Yautepec'],
            ['name_office' => 'Cuautla'],
            ['name_office' => 'Acapulco']
        ];
        
        DB::table('office')->insert($offices);
    }
}
