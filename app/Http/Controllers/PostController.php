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
        "posts" =>$this->getPost() ,
        "categorise" => Category::all(),
    ]);

    }
    public function show(Post $post)  {
        return view("post", ["post" => $post]);
    }
    public function getPost()  {

        return Post::latest()->Filter()->get();
        // return $post->;
        // return $post->get();
    }
}
