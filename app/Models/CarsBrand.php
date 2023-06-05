<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsBrand extends Model
{
    use HasFactory;
    protected $table = 'carsbrands';
    protected $fillable = ['brand'];
    protected $hidden = ['created_at','updated_at'];
}
