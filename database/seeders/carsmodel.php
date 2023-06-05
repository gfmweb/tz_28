<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class carsmodel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [

                "Mersedes Benz"=>
                    [
                        'A 180 DCT','A 200 d DCT','A 250 DCT 4MATIC'
                    ],
                "Audi"=>
                    [
                        'A4','A6','A8'
                    ],
                "Renault"=>
                    [
                        'Duster','StepWay','Sandero'
                    ],
                "Toyota"=>
                    [
                        'Camry','Avensis','Land Cruiser'
                    ],
                "BMW"=>
                    [
                        'X5','X6','X7'
                    ],
                "Aurus"=>
                    [
                        'Senat','Komendant','Limousin'
                    ]
        ];
        $iteration = 1;
        foreach ($models as $vendor=>$collectionmodels)
        {
            foreach ($collectionmodels as $model)
            {
                $SeedModel = new \App\Models\CarsModel();
                $SeedModel->name = $model;
                $SeedModel->carsbrand_id = $iteration;
                $SeedModel->save();
            }
            $iteration++;
        }
    }
}
