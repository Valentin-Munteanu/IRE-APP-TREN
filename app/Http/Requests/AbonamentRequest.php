<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbonamentRequest extends FormRequest
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
            "name" => "required|min:3|max:100|regex:/^[a-zA-Z\s]+$/",
            "lastname" =>"required|min:3|max:100|regex:/^[a-zA-Z\s]+$/",
            "email" => "required",
            "price" => "nullable",

        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Numele este obligatoriu.",
            "name.min" => "Numele trebuie să aibă cel puțin 3 caractere.",
            "name.regex" => "Numele poate conține doar litere.",
            "name.max" => "Numele trebuie să aibă cel mult 100 caractere.",

            "lastname.required" => "Prenumele este obligatoriu.",
            "lastname.min" => "Prenumele trebuie să aibă cel puțin 3 caractere.",
            "lastname.regex" => "Prenumele poate conține doar litere.",
            "lastname.max" => "Prenumele trebuie să aibă cel mult 100 caractere.",

            "email.required" => "Email este obligatoriu.",


        ];
    }
}
