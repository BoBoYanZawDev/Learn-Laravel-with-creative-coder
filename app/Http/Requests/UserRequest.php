<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return true;
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
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->route('user'))],
            'phone' => ['required', 'regex:/^(09|\+?959)[0-9]{7,10}$/'],
            'password' => ['required', 'min:8','confirmed'],
            'is_admin' => ['nullable', 'boolean'],
            'profile_img' => ['nullable']
        ];
    }
}
