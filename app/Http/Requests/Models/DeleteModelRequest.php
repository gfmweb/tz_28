<?php

namespace App\Http\Requests\Models;

use Illuminate\Foundation\Http\FormRequest;

class DeleteModelRequest extends FormRequest
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
            'id'=>['required','min:1','exists:carsmodels','integer'],
        ];
    }

    public function messages()
    {
        return [
            'id.required'=>'id является обязательным параметром',
            'id.min'=>'id должен быть больше 0',
            'id.exists'=>'Модели с таким id не обнаружено',
            'id.integer'=>'id должно быть числом',
        ];
    }
}
