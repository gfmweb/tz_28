<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'brand_id'=>['required','min:1','exists:carsbrands,id','integer'],
            'model_id'=>['required','min:1','exists:carsmodels,id','integer'],
            'manufactured_date'=>['nullable','date'],
            'mileage'=>['nullable','integer'],
            'color'=>['nullable']
        ];
    }

    public function messages()
    {
        return [
            'brand_id.required'=>'brand_id является обязательным параметром',
            'brand_id.min'=>'brand_id должен быть больше 0',
            'brand_id.exists'=>'Производителя с таким id не найдено в БД ',
            'brand_id.integer'=>'brand_id должно быть числом',
            'model_id.required'=>'model_id является обязательным параметром',
            'model_id.min'=>'model_id должно быть больше 0',
            'model_id.exists'=>'model_id такой модели не найдено в БД',
            'model_id.integer'=>'model_id должно быть числом',
        ];
    }
}
