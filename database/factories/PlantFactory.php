<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> fake()->name(),
            "scientific_name"=> fake()->name(),
            "description"=> fake()->text(),
            "image"=> fake()->imageUrl(),
            "color"=> fake()->colorName(),
            "size"=> fake()->randomElement(["small", "medium", "large"]),
            "count"=> fake()->numberBetween(1, 100),
            "price"=> fake()->randomFloat(2, 1, 100),
            "height"=> fake()->randomFloat(2, 1, 100),
            "width"=> fake()->randomFloat(2, 1, 100),
        ];
    }
}
