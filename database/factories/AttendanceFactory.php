<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'date' => fake()->date(),
            'student_id' => fake()->randomNumber(1),
            'status' => fake()->numberBetween(0, 1),
            'remark' => fake()->text(5)
        ];
    }
}
