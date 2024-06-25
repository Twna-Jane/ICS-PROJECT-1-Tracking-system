<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'awbno' => fake()->numberBetween(0000001, 9999999),
            'from' => fake()->word(),
            'to' => fake()->word(),
            'pieces' => fake()->randomDigit(),
            'weight' => fake()->numberBetween(0, 100)
        ];
    }
}
