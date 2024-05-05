<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlantRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255|unique:plants',
            'scientific_name' => 'sometimes|string|max:255|unique:plants',
            'description' => 'sometimes|string',
            'image' => 'sometimes|url',
            'color' => 'sometimes|string|max:50',
            'size' => 'sometimes|string|max:50',
            'count' => 'sometimes|integer|min:0',
            'price' => 'sometimes|numeric|min:0',
            'height' => 'sometimes|numeric|min:0',
            'width' => 'sometimes|numeric|min:0',
        ];
    }
}
