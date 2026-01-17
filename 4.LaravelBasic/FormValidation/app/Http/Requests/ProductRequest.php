<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:5.0|max:1000.0',
            'quantity' => 'required|numeric',
            'stock' => 'required|in:1,0',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return [  
            'name.min'=>'Product er nam minimum 3 okkhorer hote hobe  ',
            'name.max'=>'Product er nam maximum 50 okkhorer hote hobe',
        ];
    }
}


