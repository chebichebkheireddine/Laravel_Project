<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function distroy()
    {
        auth()->logout();
        return redirect("/")->with("success", "Good bye");
    }
    public function create()
    {
        return view("login.login");
    }
    public function store(Request $request)
    {
        // var_dump($request->all());
        $validate = $request->validate([
            "email" => "required|email|exists:users,email",
            "password" => "required"
        ]);

        if (auth()->attempt($validate)) {
            session()->regenerate();
            return redirect("/")->with("success", "Welcome back");
        }
    }
}
