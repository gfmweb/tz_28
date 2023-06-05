<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class carsbrand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Mersedes Benz','Audi','Renault','Toyota','BMW','Aurus'
        ];

        foreach ($brands as $brand){
            $seedBrand = new \App\Models\CarsBrand();
            $seedBrand->brand = $brand;
            $seedBrand->save();
        }
    }
}
