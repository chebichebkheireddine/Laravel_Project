<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    //
    public function index()
    {
        return view("admin.posts.index", ["posts" => Post::all()]);
    }
    public function create()
    {
        // make middleware
        return view("admin.posts.create");
    }
    public function store()
    {
        // $path = request()->file("image")->store("postes");
        // return $path;
        // // ddd(request()->all());
        $attribut = request()->validate([
            "title" => "required",
            "image" => "required|image",
            "slug" => ["required", Rule::unique("posts", "slug")],
            "excerpt" => "required",
            "category_id" => ["required", Rule::exists("categories", "id")],
            "body" => "required",
        ]);
        // ddd(request()->all());
        $attribut["user_id"] = auth()->id();
        // this is for uplode the path of  fiel
        $attribut["image"] = request()->file("image")->store("postesimge");
        // create  a save
        Post::create($attribut);
        return redirect("/");
    }
    public function edit(Post $post)
    {
        return view("admin.posts.edit", ["post" => $post]);
    }
    public function update(Post $post)
    {
        $attribut = request()->validate([
            "title" => "required",
            "image" => "image",
            "slug" => ["required", Rule::unique("posts", "slug")->ignore($post->id)],
            "excerpt" => "required",
            "category_id" => ["required", Rule::exists("categories", "id")],
            "body" => "required",
        ]);
        if (isset($attribut["image"])) {
            $attribut["image"] = request()->file("image")->store("postesimge");
        }

        $post->update($attribut);
        return back()->with("success", "Post Updated Successfully");
    }
}
