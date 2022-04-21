<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPersonaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required | min:6 | max:50 | unique:users',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:8 | confirmed',
            'user_type' => 'required',
            'ci' => 'number | required | unique:people',
            'name' => 'max:50 | required',
            'last_name' => 'max:20 | required',
            'mothers_last_name' => 'max:20 | required',
            'date_birth' => 'date | required',
            'cellphone' => 'number',
            'phone' => 'number',
        ];
    }
}
