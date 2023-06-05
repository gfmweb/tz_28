<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brands\CreateBrandRequest;
use App\Http\Requests\Brands\DeleteBrandRequest;
use App\Http\Requests\Brands\UpdateBrandRequest;
use App\Models\CarsBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     * Список всех марок авто
     */
    public function getBrands(Request $request)
    {
       $result =  (is_null($request->get('id')))?
           CarsBrand::all():
           CarsBrand::find($request->get('id'));
       $status = (isset($result[0]->id) || isset($result->id))?200:204;
       return response()->json($result,$status,[],256);
    }

    public function createBrand(CreateBrandRequest $request)
    {
        $brand = new CarsBrand();
        $brand->brand = $request->brand;
        $brand->save();
        return response()->json([],201,[],256);
    }

    public function updateBrand(UpdateBrandRequest $request)
    {
            $brand = CarsBrand::findorfail($request->get('id'));
            $brand->brand = $request->get('brand');
            $brand->save();
        return response()->json([],204,[],256);
    }

    public function deleteBrand(DeleteBrandRequest $request)
    {
        CarsBrand::destroy($request->get('id'));
        return response()->json([],204,[],256);
    }
}
