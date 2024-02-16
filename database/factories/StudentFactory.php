<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
        return [
            //

            'dob' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'parents_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10)

        ];
    }
}
