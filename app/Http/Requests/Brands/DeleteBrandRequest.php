<?php

namespace App\Http\Requests\Brands;

use Illuminate\Foundation\Http\FormRequest;

class DeleteBrandRequest extends FormRequest
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
            'id.required'=>'id является обязательным',
            'id.numeric'=>'id должно быть числом',
            'id.min'=>'id должен быть больше 0',
            'id.exists'=>'Производитель с таким id отсутствует в базе',
        ];
    }
}
