<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "description" => "required"
        ];
    }


public function messages()
{
    return [
        'name.required' => 'Numele este obligatoriu.',
        'name.min' => 'Numele trebuie să conțină cel puțin 3 caractere.',
        'name.max' => 'Numele poate conține maxim 100 de caractere.',
        'name.regex' => 'Numele poate conține doar litere și spații.',

        'lastname.required' => 'Prenumele este obligatoriu.',
        'lastname.min' => 'Prenumele trebuie să conțină cel puțin 3 caractere.',
        'lastname.max' => 'Prenumele poate conține maxim 100 de caractere.',
        'lastname.regex' => 'Prenumele poate conține doar litere și spații.',

        'email.required' => 'Adresa de email este obligatorie.',
        'email.email' => 'Adresa de email trebuie să fie validă.',

        'description.required' => 'Descrierea este obligatorie.',
    ];
}
}
