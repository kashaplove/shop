<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'nullable|string',
            'age' => 'nullable|string',
            'address' => 'nullable|string',
            'gender' => 'nullable|string',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required_with:password|same:password|',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должно быть строкой',

            'password.required' => 'Это поле необходимо заполнить',
            'password.string' => 'Это поле должно быть строкой',
            'password.confirmed' => 'Пароли не совпадают',

            'password_confirmation.required_with' => 'Это поле необходимо заполнить',
            'password_confirmation.same' => 'Пароли не совпадают',

            'surname.required' => 'Это поле необходимо заполнить',
            'surname.string' => 'Это поле должно быть строкой',

            'patronymic.string' => 'Это поле должно быть строкой',
            'age.string' => 'Это поле должно быть строкой',
            'address.string' => 'Это поле должно быть строкой',
        ];
    }
}
