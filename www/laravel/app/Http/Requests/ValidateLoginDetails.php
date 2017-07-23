<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateLoginDetails extends FormRequest
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
            "email" => "required|email",
            "password" => "required|min:6"
        ];
    }

    public function messages(){
        return [
        "email.required" => "you must provide an email address",
        "email.email" => "enter a valid email address",

        "password.required" => "you must enter a password"

        ];
    }
}
