<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CancelTrainRequest extends FormRequest
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
            'train_number' => 'required|min:3|max:20',
            'route' => 'string|required|min:3|max:20',
            'destination' => 'string|required|min:3|max:40|regex:/^[a-zA-Z\s]+$/',
            'station_start' => 'string|required|min:3|max:40|regex:/^[a-zA-Z\s]+$/',
        ];
    }


    public function messages()
{
    return [


        'route.required' => 'Te rugăm să introduceți un nume de rută.',
        'route.min' => 'Numele rutei trebuie să aibă minim 3 caractere.',
        'route.max' => 'Numele rutei nu poate avea mai mult de 60 de caractere.',

        'train_number.required' => 'Te rugăm să introduceți un număr de tren.',
        'train_number.min' => 'Numărul de tren trebuie să aibă minim 3 caractere.',
        'train_number.max' => 'Numărul de tren nu poate avea mai mult de 20 de caractere.',

        'destination.required' => 'Te rugăm să introduceți o destinație.',
        "destination.regex" => "Campul trebuie să conțină doar litere",
        'destination.min' => 'Numele destinației trebuie să aibă minim 3 caractere.',
        'destination.max' => 'Numele destinației nu poate avea mai mult de 40 de caractere.',

        'station_start.required' => 'Te rugăm să introduceți o stație de plecare.',
        "station_start.regex" => "Campul trebuie să conțină doar litere",
        'station_start.min' => 'Numele stației de plecare trebuie să aibă minim 3 caractere.',
        'station_start.max' => 'Numele stației de plecare nu poate avea mai mult de 40 de caractere.',
    ];

    }

}

