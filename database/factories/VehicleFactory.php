<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'registration_no' => $this->faker->randomNumber(),
            'manufatured_year' => $this->faker->year($max = 'now'),
            'type' => $this->faker->randomElement(['Pick Up', 'Open Truck', 'Refrigerated truck']),
            'tonnage' => $this->faker->randomDigit(),
            'user_id' => User::factory(),
        ];
    }
}
