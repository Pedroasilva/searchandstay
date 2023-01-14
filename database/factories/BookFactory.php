<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name,
            'ISBN' => $this->faker->isbn13,
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
