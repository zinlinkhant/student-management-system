<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\classroom_student>
 */
class ClassroomStudentFactory extends Factory
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
            'classroom_id' => fake()->randomDigitNotZero(1),
            'student_id' => fake()->randomDigitNotZero(1)
        ];
    }
}
