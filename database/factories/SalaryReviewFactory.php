<?php

namespace Database\Factories;

use App\Models\Quarter;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryReviewFactory extends Factory
{
    public function definition()
    {
        $quarterIds = Quarter::all()->pluck('id')->toArray();
        return [
            'id' => $this->faker->unique()->numerify('##Q#'),
            'quarter_id' => $this->faker->randomElement($quarterIds),
            'start' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'end' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
