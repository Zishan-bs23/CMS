<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numerify('BS0###'),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => $this->faker->numberBetween($min=1, $max=3),
            'state' => $this->faker->numberBetween($min=1, $max=3),
            'remember_token' => Str::random(10),

            'expertise_area' => $this->faker->randomElement(['Frontend', 'Backend', 'Sales', 'Administration']),
            'employee_type' => $this->faker->randomElement(['Developer', 'Non Developer', 'QA', 'N/A']),
            'managerial_capacity' => $this->faker->randomElement(['Managers', 'Others', 'Self', 'N/A']),
            'employee_category' => $this->faker->randomElement(['Contractual', 'Permanent', 'Probation']),
            'designation' => $this->faker->randomElement(['Software Engineer', 'UI/UX Designer', 'BA', 'Trainee']),
            'level' => $this->faker->randomElement(['IC3', 'IC3B', 'M3', 'M3B']),

            'sbu' => $this->faker->randomElement(['Anupam Saha', 'Asif Ul Haque', 'MJ Ferdous', 'Raisul Islam', 'Support']),
            'partner' => $this->faker->randomElement(['Mizanur Rahman', 'MJ Ferdous', 'Support']),
            'hr' => $this->faker->randomElement(['Nayem', 'Sojib', 'Siyam', 'Sohel', 'Support', 'Tori']),
            'team' => $this->faker->randomElement(['GLPG', 'Hungry Naki', 'GP', 'ML', 'Support']),
            'previous_team' => $this->faker->randomElement(['GLPG', 'Hungry Naki', 'GP', 'ML', 'Support']),
            
            'joining_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'confirmation_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'career_start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),

            'blood_group' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'engagement' => $this->faker->numberBetween($min=50, $max=100),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
