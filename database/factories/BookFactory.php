<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(8),
            'image' => fake()->imageUrl(640, 480, 'cars', true),
            'price' => fake()->numberBetween(5,25),
            'author' => fake()->name(),
            'nombre_pages' => fake()->numberBetween(0,150),
            'created_at' => now(),
        ];
    }
}
