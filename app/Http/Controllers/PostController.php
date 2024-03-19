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
        $post = Post::latest();
    // search code
    if (request("search")) {
        $post->where("title", "like", "%" . request("search") . "%")
            ->orwhere("body", "like", "%" . request("search") . "%");
    }
    return view('posts', [
        "posts" => $post->get(),
        "categorise" => Category::all(),
    ]);

    }
    public function show(Post $post)  {
        return view("post", ["post" => $post]);
    }
}
