<?php
/**
 * Автомобили
 */
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\CreateCarRequest;
use App\Http\Requests\Cars\DeleteCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Получить список или конкретный автомобиль
     */
        public function getCars(Request $request)
        {
            $result =  Car::getCars($request->get('id'));
            $status = ( isset($result[0]->id) || isset($result->id) )?200:204;
            return response()->json($result,$status,[],256);
        }

    /**
     * @param UpdateCarRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Редактировать автомобиль
     */
        public function updateCar(UpdateCarRequest $request)
        {
            $car = Car::find($request->get('id'));
            $car->carsbrand_id = $request->get('brand_id');
            $car->carsmodel_id = $request->get('model_id');
            $car->manufactured_date = $request->get('manufactured_date');
            $car->mileage = $request->get('mileage');
            $car->color = $request->get('color');
            $car->save();
            return response()->json([],204,[],256);
        }

    /**
     * @param CreateCarRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Создать автомобиль
     */
        public function createCar(CreateCarRequest $request)
        {
            $car = new Car();
            $car->carsbrand_id = $request->get('brand_id');
            $car->carsmodel_id = $request->get('model_id');
            $car->manufactured_date = $request->get('manufactured_date');
            $car->mileage = $request->get('mileage');
            $car->color = $request->get('color');
            $car->save();
            return response()->json([],201,[],256);
        }

    /**
     * @param DeleteCarRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Удалить автомобиль
     */
    public function deleteCar(DeleteCarRequest $request)
    {
        Car::destroy($request->get('id'));
        return response()->json([],204,[],256);
    }
}
