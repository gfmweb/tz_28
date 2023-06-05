<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarsModel extends Model
{
    use HasFactory;

    protected $table = 'carsmodels';
    protected $fillable = ['name','carsbrand_id'];
    protected $hidden = ['created_at','updated_at'];

    public static function getModels(int $id = null){
        return (is_null($id))?
            DB::table('carsmodels')
                ->select(['carsmodels.id','carsmodels.name','carsbrands.brand'])
                ->join('carsbrands', 'carsmodels.carsbrand_id' ,'=','carsbrands.id')
                ->orderBy('carsbrands.id')
                ->get()
            :
            DB::table('carsmodels')
                ->select(['carsmodels.id','carsmodels.name','carsbrands.brand'])
                ->join('carsbrands', 'carsmodels.carsbrand_id' ,'=','carsbrands.id')
                ->where('carsmodels.id',$id)
                ->get();
    }
}
