<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Fake data to seed in DB
            "user_id" => User::factory(), #this is genrate
            "category_id" => Category::factory(),
            "slug" => $this->faker->slug(),
            "title" => $this->faker->sentence(),
            "excerpt" => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            "body" => '<p>' . implode('</p><p>', $this->faker->paragraphs(7)) . '</p>',

        ];
    }
}
