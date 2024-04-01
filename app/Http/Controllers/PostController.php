<?php

namespace App\Http\Controllers;

use App\Models\Post;

// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;

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
    public function store()
    {
        $attribut = request()->validate([
            "title" => "required",
            "slug" => ["required", Rule::unique("categories", "slug")],
            "excerpt" => "required",
            "category_id" => ["required", Rule::exists("categories", "id")],
            "body" => "required",
        ]);
        // ddd(request()->all());
        $attribut["user_id"] = auth()->id();
        // create  a save
        Post::create($attribut);
        return redirect("/");
    }
}
