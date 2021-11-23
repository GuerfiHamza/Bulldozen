<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'sku' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'brand' => $this->faker->word(),
            'details' => $this->faker->paragraph(),
            'description' => $this->faker->paragraph(),
            'image' => "category/close-up-construction-site-excavator_1-min.jpg",
            'images' => "products/excavator-construction-machine-min.jpg products/close-up-construction-site-excavator_1-min.jpg",
        ];
    }
}
