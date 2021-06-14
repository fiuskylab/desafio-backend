<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Only admin can create other admins
        if ($this->request->role != 'admin' && auth()->user()->role == 'admin')
            return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required', 'unique:users'
            ],
            'name' => [
                'required'
            ],
            'password' => [
                'required'
            ],
            'role' => [
                'required', Rule::in(['admin', 'role'])
            ],
        ];
    }
}
