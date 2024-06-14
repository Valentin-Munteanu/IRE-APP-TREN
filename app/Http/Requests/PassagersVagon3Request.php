<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PassagersVagon3Request extends FormRequest
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
            'person_name.*' => 'required|string|min:3|regex:/^[a-zA-Z]+$/u',
            'person_lastname.*' => 'required|string|min:3|regex:/^[a-zA-Z]+$/u',
            'email.*' => 'required|email|min:3',
            'selectedSeats3' => [
                'required',
                Rule::unique('passagers_vagon3s')->where(function ($query) {
                    return $query->where('biletes_id', $this->bilet_id)
                                 ->where('selectedSeats3', $this->input('selectedSeats3'));
                })->ignore($this->id),
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'person_name.*.required' => 'Numele persoanei este obligatoriu.',
            'person_name.*.string' => 'Numele persoanei trebuie să fie un text.',
            'person_name.*.min' => 'Numele persoanei trebuie să aibă minim 3 caractere.',
            'person_name.*.regex' => 'Numele persoanei poate conține doar litere.',
            'person_lastname.*.required' => 'Prenumele persoanei este obligatoriu.',
            'person_lastname.*.string' => 'Prenumele persoanei trebuie să fie un text.',
            'person_lastname.*.min' => 'Prenumele persoanei trebuie să aibă minim 3 caractere.',
            'person_lastname.*.regex' => 'Prenumele persoanei poate conține doar litere.',
            'email.*.required' => 'Email-ul persoanei este obligatoriu.',
            'email.*.email' => 'Email-ul persoanei trebuie să fie valid.',
            'email.*.min' => 'Email-ul persoanei trebuie să aibă minim 3 caractere.',
            'selectedSeats3' => 'Locul selectat este deja ocupat.'


            // Adaugă alte mesaje de eroare, dacă este necesar
        ];
    }


}
