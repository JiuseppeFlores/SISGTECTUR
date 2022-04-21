<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NegocioCreateRequest extends FormRequest
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
            'name' => 'required | min:6 | max:50',
            'description' => 'required | max:255',
            'nit' => 'required | integer | unique:business',
            'email' => 'required | max:50',
            'phone' => 'max:20',
            'cellphone' => 'max:20',
            'business_type_id' => 'required',
        ];
    }
}
