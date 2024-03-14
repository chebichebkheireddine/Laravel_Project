<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user = User::factory()->create();
        $work=Category::create([
            "name"=>'Codeing',
              "slug"=>'test'
        ]); 
        $fun=Category::create([
            "name"=>'play',
              "slug"=>'Games'
        ]); 
        Post::create(
            [
                "user_id"=>$user->id,
                "category_id"=>$work->id,
                "slug"=>"Coding",
                "title"=>"My Work post",
                "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ea, nam corporis quasi inventore, porro eveniet nesciunt vel earum at expedita vitae totam? Impedit dignissimos, fugit dolorem in voluptatem quo."  
            ]
        );
        Post::create(
            [
                "user_id"=>$user->id,
                "category_id"=>$fun->id,
                "title"=>"My Fun post",
                "slug"=>"use",
                "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ea, nam corporis quasi inventore, porro eveniet nesciunt vel earum at expedita vitae totam? Impedit dignissimos, fugit dolorem in voluptatem quo."  
            ]
        );
    }
}
