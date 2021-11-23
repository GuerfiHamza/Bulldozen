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
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(1),
            'image' => "category/close-up-construction-site-excavator_1-min.jpg",

        ];
    }
}
