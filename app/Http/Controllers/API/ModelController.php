<?php
/**
 * Модели автомобилей
 */
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Models\CreateModelRequest;
use App\Http\Requests\Models\DeleteModelRequest;
use App\Http\Requests\Models\UpdateModelRequest;
use App\Models\CarsModel;
use Illuminate\Http\Request;


class ModelController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Получить список или конкретную модель
     */
    public function getModels(Request $request)
    {
        $result =  CarsModel::getModels($request->get('id'));
        $status = ( isset($result[0]->id) || isset($result->id) )?200:204;
        return response()->json($result,$status,[],256);
    }

    /**
     * @param UpdateModelRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Обновить модель
     */
    public function updateModel(UpdateModelRequest $request)
    {
        $model = CarsModel::find($request->get('id'));
        $model->name = $request->get('name');
        $model->carsbrand_id = $request->get('brand_id');
        $model->save();
        return response()->json([],204,[],256);
    }

    /**
     * @param CreateModelRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Создать модель
     */
    public function createModel(CreateModelRequest $request)
    {
        $model = new CarsModel();
        $model->name = $request->get('name');
        $model->carsbrand_id = $request->get('brand_id');
        $model->save();
        return response()->json([],201,[],256);
    }

    /**
     * @param DeleteModelRequest $request
     * @return \Illuminate\Http\JsonResponse
     * Удалить модель
     */
    public function deleteModel(DeleteModelRequest $request)
    {
        CarsModel::destroy($request->get('id'));
        return response()->json([],204,[],256);
    }


}
