<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginRequest;

class AdminController extends Controller
{

    public function adminRegister()
    {
        return view("Admin.Crud.register");
    }

    public function workRegister(AdminRequest $adminRequest)
    {
        $data = $adminRequest->validated();
        $encryptedPassword = Hash::make($data["password"]);

        $adminCount = Admin::count();
        if ($adminCount >= 3) {
            return redirect()->route('admin-registerGET')->with('error', 'Numărul maxim de admini permisi este deja atins.');
        }

        Admin::create([
            "name" => $data["name"],
            "lastname" => $data["lastname"],
            "login" => $data["login"],
            "email" => $data["email"],
            "password" => $encryptedPassword
        ]);

        return redirect()->route('admin-loginGET')->with('success', 'Contul a fost creat cu succes. Vă rugăm să vă autentificați.');
    }
    public function logoutAdmin()
    {
        Auth::guard("admins")->logout();
        return redirect()->route("admin-loginGET");
    }

    public function adminLogin()
    {
        return view("Admin.login");
    }

    public function workLogin(AdminLoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::guard('admins')->attempt(['login' => $data['login'], 'password' => $data['password']])) {
            return redirect()->route("admin-home");
        } else {
            return back()->withErrors(["login" => 'Datele de autentificare sunt incorecte.']);
        }
    }

    public function indexAdmin()
    {
        $admin = Auth::guard('admins')->user();
        if (is_null($admin)) {
            return redirect()->route("admin-registerGET");
        }
        return view("Admin.Crud.admin", compact("admin"));

    }
}
