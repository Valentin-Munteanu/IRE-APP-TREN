<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserRegister(){
        return view("frontPages.Register");
    }

    public function workUserRegister(UserRequest $userRequest){
        $data = $userRequest->validated();
        $cryptPassword = Hash::make($data["password"]);

        User::create([
            "name" => $data["name"],
            "lastname" => $data["lastname"],
            "login" => $data["login"],
            "email" => $data["email"],
            "password" => $cryptPassword
        ]);

        return redirect()->route("Login")->with("success", "V-ați înregistrat cu succes. Vă rugăm să vă autentificați.");
    }

    public function Login(){
        $lastLogin = session('last_login', '');
        return view("frontPages.Login", compact("lastLogin"));

    }

    public function workLogin(LoginRequest $loginRequest){
        $data = $loginRequest->validated();
        $remember = $loginRequest->has('remember');
        if (Auth::guard('web')->attempt(['login' => $data['login'], 'password' => $data['password']], $remember)) {
            return redirect()->route('user.dashboard');
        } else {
            return back()->withErrors(["login" => 'Datele de autentificare sunt incorecte.'])->withInput($loginRequest->only("login"));
        }
    }

    public function editUser(LoginRequest $loginRequest){
$data = $loginRequest ->validated();
$user = Auth::guard("web")->user();

$user->login = $data["login"];

if(!empty($data["password"])){
    $user->password = Hash::make($data["password"]);
}

$user->save();

return redirect()->route("user.dashboard")->with("Datele au fost actualizate cu succes");

    }

    public function deleteUser(){
        $user = Auth::guard('web')->user();
        session()->forget('last_login');
        Auth::guard("web")->logout();
        $user->delete();

        return redirect()->route("Register")->with("Contul a fost sters cu succes");

    }


    public function indexUser(){
        if (!auth()->guard('web')->check()) {
            return redirect()->route("Register");
        }
        $user = Auth::guard('web')->user();
        return view("frontPages.Dashboard", compact("user"));
    }

    public function logoutUser(){
$login = Auth::guard('web')->user()->login;
        Auth::guard('web')->logout();
        session(['last_login' => $login]);
        return redirect()->route("Register");
    }
}



