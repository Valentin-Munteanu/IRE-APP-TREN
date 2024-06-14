<?php

namespace App\Http\Controllers;


use App\Models\Abonamente;
use App\Mail\AbonamentMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AbonamentRequest;

class AbonamentController extends Controller
{
    public function create(){
        return view("frontPages.Abonamente");
    }

    public function store(AbonamentRequest $abonamentRequest){
$data = $abonamentRequest->validated();
$abonament = Abonamente::create($data);

$emailData = [
    "name" => $abonament->name,
    "lastname" => $abonament->lastname,
    "email" => $abonament->email,
    "price" => $abonament->price
];


Mail::to($abonament->email)->send(new AbonamentMail($emailData));

return redirect()->route('send-date')->with('success', 'Pasagerii au fost adăugați cu succes.');

    }
}
