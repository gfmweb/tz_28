<?php

namespace App\Http\Requests\Brands;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'brand'=>['required','unique:carsbrands']
        ];
    }

    public function messages()
    {
        return[
            'brand.required'=>'ключ brand является обязательным',
            'brand.unique'=>'Этот производитель уже есть в базе'
        ];

    }
}
