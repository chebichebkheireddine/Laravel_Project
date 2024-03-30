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
            "user_name" => "required|min:5|max:255",
            "email" => "required|email",
            "password" => "required|min:7"
        ]);
        User::create($attrbute);
        return redirect("/");
    }
}
