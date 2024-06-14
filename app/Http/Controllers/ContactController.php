<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
 public function createContact(){
    return view("frontPages.Contacte");
 }

 public function storeContact(ContactRequest $contactRequest){
    $data = $contactRequest->validated();
    Contact::create($data);
return redirect()->route("SendForm")->with("succes", "Cererea a fost trimisa cu succes");
 }
}
