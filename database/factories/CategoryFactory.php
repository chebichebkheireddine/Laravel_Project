<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //This fake data with category
            "name" => $this->faker->unique->word(),
            "slug" => $this->faker->slug()
        ];
    }
}
