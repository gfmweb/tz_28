<?php

namespace App\Http\Requests\Models;

use Illuminate\Foundation\Http\FormRequest;

class CreateModelRequest extends FormRequest
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
            'name'=>['required'],
            'brand_id'=>['required','exists:carsbrands,id','integer','min:1'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'name является обязательным параметром',
            'brand_id.required'=>'brand_id является обязательным параметром',
            'brand_id.exists'=>'Производителя с таким id не найдено в БД',
            'brand_id.integer'=>'brand_id должно быть числом',
            'brand_id.min'=>'brand_id должно быть больше 0'
        ];
    }
}
