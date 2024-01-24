<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\exam_result>
 */
class exam_resultFactory extends Factory
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
            'student_id' => fake()->randomDigitNotNull(),
            'exam_id' => fake()->randomDigitNotNull(),
            'course_id' => fake()->randomDigitNotNull(),
            'marks' => fake()->numberBetween(0, 100),
        ];
    }
}
