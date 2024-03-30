<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view("register.register");
    }
    public function store()
    {
        // var_dump(request()->all());
        $attrbute = request()->validate([
            "name" => "required|max:255",
            "user_name" => "required|min:5|max:255|unique:users,user_name",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:7|max:255"
        ]);
        // $attrbute["password"] = bcrypt($attrbute["password"]);
        User::create($attrbute);
        return redirect("/");
    }
}
