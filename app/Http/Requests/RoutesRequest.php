<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoutesRequest extends FormRequest
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
            'number_train' => 'required|min:3|max:20',
            'route_name' => "string|required|min:3|max:60",
            "duration" => "string|required|min:3|max:15",
            'train_number' => 'required|min:3|max:20',
            'route' => 'string|required|min:3|max:100',
            'destination' => 'string|required|min:3|max:40|regex:/^[a-zA-Z\s]+$/',
            'station_start' => 'string|required|min:3|max:40|regex:/^[a-zA-Z\s]+$/',
            "price_class1" => "string|required|min:3|max:10",
            "price_class2" => "string|required|min:3|max:10",
            "class1c" => "integer|required",
            "class2c" => "integer|required",
            "vagon_number1" => "integer|required|min:1",
            "vagon_number2" => "integer|required|min:1",
            "vagon_number3" => "integer|required|min:1",
            "vagon_number4" => "integer|required|min:1",
            'hidden' => 'boolean'



        ];
    }

    public function messages()
{
    return [
        'number_train.required' => 'Te rugăm să introduceți un număr de tren.',
        'number_train.min' => 'Numărul de tren trebuie să aibă minim 3 caractere.',
        'number_train.max' => 'Numărul de tren nu poate avea mai mult de 20 de caractere.',

        'route_name.required' => 'Te rugăm să introduceți un nume de rută.',
        'route_name.min' => 'Numele rutei trebuie să aibă minim 3 caractere.',
        'route_name.max' => 'Numele rutei nu poate avea mai mult de 60 de caractere.',



        'duration.required' => 'Te rugăm să introduceți o durată.',
        'duration.min' => 'Durata trebuie să aibă minim 5 caractere.',
        'duration.max' => 'Durata nu poate avea mai mult de 15 caractere.',

        'train_number.required' => 'Te rugăm să introduceți un număr de tren.',
        'train_number.min' => 'Numărul de tren trebuie să aibă minim 3 caractere.',
        'train_number.max' => 'Numărul de tren nu poate avea mai mult de 20 de caractere.',


        'route.required' => 'Te rugăm să introduceți o rută.',
        'route.min' => 'Numele rutei trebuie să aibă minim 3 caractere.',
        'route.max' => 'Numele rutei nu poate avea mai mult de 60 de caractere.',

        'destination.required' => 'Te rugăm să introduceți o destinație.',
        "destination.regex" => "Campul trebuie să conțină doar litere",
        'destination.min' => 'Numele destinației trebuie să aibă minim 3 caractere.',
        'destination.max' => 'Numele destinației nu poate avea mai mult de 40 de caractere.',


        'station_start.required' => 'Te rugăm să introduceți o stație de plecare.',
        "station_start.regex" => "Campul trebuie să conțină doar litere",
        'station_start.min' => 'Numele stației de plecare trebuie să aibă minim 3 caractere.',
        'station_start.max' => 'Numele stației de plecare nu poate avea mai mult de 40 de caractere.',


        'price_class1.required' => 'Te rugăm să introduceți un pret pentru Clasa 1.',
        'price_class1.min' => 'Pretul pentru Clasa 1 trebuie să aibă minim 3 caractere.',
        'price_class1.max' => 'Pretul pentru Clasa 1 nu poate avea mai mult de 10 caractere.',

        'price_class2.required' => 'Te rugăm să introduceți un pret pentru Clasa 2.',
        'price_class2.min' => 'Pretul pentru Clasa 2 trebuie să aibă minim 3 caractere.',
        'price_class2.max' => 'Pretul pentru Clasa 2 nu poate avea mai mult de 10 caractere.',

        'class1c.integer' => 'Numărul de locuri de Clasa 1 trebuie să fie un număr.',
        'class1c.required' => 'Te rugăm să introduceți un număr de locuri de Clasa 1.',
        'class2c.integer' => 'Numărul de locuri de Clasa 2 trebuie să fie un număr întreg.',
        'class2c.required' => 'Te rugăm să introduceți un număr de locuri de Clasa 2.',

        'vagon_number1.integer' => 'Numărul primului vagon trebuie să fie un număr întreg.',
        'vagon_number1.required' => 'Te rugăm să introduceți numărul primului vagon.',
        'vagon_number1.min' => 'Numărul primului vagon trebuie să aibă minim 1 cifră.',

        'vagon_number2.integer' => 'Numărul celui de-al doilea vagon trebuie să fie un număr întreg.',
        'vagon_number2.required' => 'Te rugăm să introduceți numărul celui de-al doilea vagon.',
        'vagon_number2.min' => 'Numărul celui de-al doilea vagon trebuie să aibă minim 1 cifră.',


        'vagon_number3.integer' => 'Numărul celui de-al treilea vagon trebuie să fie un număr întreg.',
        'vagon_number3.required' => 'Te rugăm să introduceți numărul celui de-al treilea vagon.',
        'vagon_number3.min' => 'Numărul celui de-al treilea vagon trebuie să aibă minim 1 cifră.',

        'vagon_number4.min' => 'Numărul celui de-al patrulea vagon trebuie să aibă minim 1 cifră.',
        'vagon_number4.integer' => 'Numărul celui de-al patrulea vagon trebuie să fie un număr întreg.',
        'vagon_number4.required' => 'Te rugăm să introduceți numărul celui de-al patrulea vagon.'
    ];
}
}

