<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrackedCargo>
 */
class TrackedCargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'awbno' => 3390229,
            'flight' => fake()->word(),
            'status' => fake()->word(),
            'location' => fake()->word()
        ];
    }
}
