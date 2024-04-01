<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PostController extends Controller
{
    //
    public function index()
    {

        return view('posts.index', [
            "posts" => Post::latest()->Filter(request(["search", "category", "author"]))->paginate(6),
        ]);
    }
    public function show(Post $post)
    {
        return view("posts.show", ["post" => $post]);
    }
    public function create()
    {
        // make middleware 
        return view("posts.create");
    }
}
