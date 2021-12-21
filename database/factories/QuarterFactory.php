<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuarterFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numerify('##Q#'),
            'start' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'end' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
