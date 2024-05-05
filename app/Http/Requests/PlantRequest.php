<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantRequest extends FormRequest
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
            "name" => ['required',  'max:255'],
            "scientific_name" => ['required', 'max:255'],
            "description" => ['required', 'max:255'],
            "image" => ['required', 'max:2048'],
            "color" => ['required', 'max:255'],
            "size" => ['required', 'max:255'],
            "count" => ['required', 'integer', 'min:1'],
            "price" => ['required', 'numeric', 'min:1'],
            "height" => ['required', 'numeric'],
            "width" => ['required', 'numeric'],
        ];
    }
}
