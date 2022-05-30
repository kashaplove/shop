<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'preview_image' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'is_published' => 'nullable|boolean',
            'category_id' => 'nullable|integer',

            'tags' => 'nullable|array',
            'colors' => 'nullable|array',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Это поле должно быть в текстовом формате',

            'description.required' => 'Это поле необходимо заполнить',
            'description.string' => 'Это поле должно быть в текстовом формате',

            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Это поле должно быть в текстовом формате',

            'preview_image.required' => 'Это поле необходимо заполнить',
            'preview_image.string' => 'Это поле должно быть в текстовом формате',

            'quantity.required' => 'Это поле необходимо заполнить',
            'quantity.integer' => 'Это поле должно быть в числовом формате',

            'price.required' => 'Это поле необходимо заполнить',
            'price.integer' => 'Это поле должно быть в числовом формате',

            'is_published.required' => 'Это поле необходимо заполнить',
            'is_published.boolean' => 'Неверный формат',

            'category_id.required' => 'Это поле необходимо заполнить',
            'category_id.integer' => 'Неверный формат',
        ];
    }
}
