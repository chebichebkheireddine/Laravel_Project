<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    //
    public function index(){

    return view('posts', [
        "posts" =>Post::latest()->Filter( request(["search"]))->get() ,
        "categorise" => Category::all(),
    ]);

    }
    public function show(Post $post)  {
        return view("post", ["post" => $post]);
    }

}
