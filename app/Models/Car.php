<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'carsbrand_id',
        'carsmodel_id',
        'manufactured_date',
        'mileage','color'
    ];
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public static function getCars(int $id = null){
         return (is_null($id))?
             DB::table('cars')
                ->select(
                    [
                        'cars.id',
                        'carsbrands.brand',
                        'carsmodels.name as model',
                        'cars.manufactured_date',
                        'cars.mileage',
                        'cars.color'
                        ]
                )
                ->join('carsbrands', 'cars.carsbrand_id' ,'=','carsbrands.id')
                ->join('carsmodels', 'cars.carsmodel_id' ,'=','carsmodels.id')
                ->get()
             :
             DB::table('cars')
                 ->select(
                     [
                         'cars.id',
                         'carsbrands.brand',
                         'carsmodels.name as model',
                         'cars.manufactured_date',
                         'cars.mileage',
                         'cars.color'
                     ]
                 )
                 ->join('carsbrands', 'cars.carsbrand_id' ,'=','carsbrands.id')
                 ->join('carsmodels', 'cars.carsmodel_id' ,'=','carsmodels.id')
                 ->where('cars.id',$id)
                 ->get();
    }
}
