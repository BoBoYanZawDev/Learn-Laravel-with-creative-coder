<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => ['required', 'min:3'],
                'price' => 'required',
                'category_id' => 'required',
                'description' => 'required' ,
                'product_img' => ['required','image','max:2048']       
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'Please select a category'
        ];
    }
}
