<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'nullable',
            'content' => 'required',
            'place' => 'nullable',
            'date' => 'required',
            'thumbnail' => 'nullable|image',
        ];
    }

    public function messages(){
        return [
            'required' => 'Поле обязательно для ввода',
            'image' => 'Загружаемый файл должен быть изображением (jpg, jpeg, png, bmp, gif, svg или webp)',
            'numeric' => 'Значение должно быть числовым',
        ];
    }
}
