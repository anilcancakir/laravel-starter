<?php

namespace App\Http\Requests\Auth;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:63',
            'email' => 'required|email|max:63|unique:users,email',
            'password' => 'required|password|min:8|max:32|confirmed',
            'password_confirmation' => 'required|password|min:8|max:32',
            'tos' => 'required|boolean',
        ];
    }
}
