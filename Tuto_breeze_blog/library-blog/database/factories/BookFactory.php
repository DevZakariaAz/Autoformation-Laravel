<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'published_date' => $this->faker->date,
            'isbn' => $this->faker->unique()->isbn13,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'cover_image' => $this->faker->imageUrl(200, 300, 'books'),
        ];
    }
}
