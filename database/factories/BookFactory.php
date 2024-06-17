<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => [
                'ar' => fake()->name(),
                'en' => fake()->name(),
            ],
            'desc' => [
                'ar' => fake()->paragraph(),
                'en' => fake()->paragraph(),
            ],
            'cover' => '22',
            'cat_id' => '33',
        ];
    }
}
