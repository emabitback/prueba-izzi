<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create(['name_office' =>'Cuernavaca']);
        Office::create(['name_office' =>'Yautepec']);
    }
}
