<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class DeleteCarRequest extends FormRequest
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
            'id'=>['required','min:1','exists:cars','integer'],
        ];
    }
    public function messages()
    {
        return [
            'id.required'=>'id является обязательным параметром',
            'id.min'=>'id должно быть больше 0',
            'id.exists'=>'Автомобиля с таким id не найдено в БД',
            'id.integer'=>'id должно быть числом',
        ];
    }
}
