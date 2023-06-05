<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group( function(){

    Route::get('/brands',[\App\Http\Controllers\API\BrandController::class,'getBrands']);
    Route::post('/brands',[\App\Http\Controllers\API\BrandController::class,'createBrand']);
    Route::put('/brands',[\App\Http\Controllers\API\BrandController::class,'updateBrand']);
    Route::delete('/brands',[\App\Http\Controllers\API\BrandController::class,'deleteBrand']);

    Route::get('/models',[\App\Http\Controllers\API\ModelController::class,'getModels']);
    Route::post('/models',[\App\Http\Controllers\API\ModelController::class,'createModel']);
    Route::put('/models',[\App\Http\Controllers\API\ModelController::class,'updateModel']);
    Route::delete('/models',[\App\Http\Controllers\API\ModelController::class,'deleteModel']);

    Route::get('/cars',[\App\Http\Controllers\API\CarController::class,'getCars']);
    Route::post('/cars',[\App\Http\Controllers\API\CarController::class,'createCar']);
    Route::put('/cars',[\App\Http\Controllers\API\CarController::class,'updateCar']);
    Route::delete('/cars',[\App\Http\Controllers\API\CarController::class,'deleteCar']);
});




