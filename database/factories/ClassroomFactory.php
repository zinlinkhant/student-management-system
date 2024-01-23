<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
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
            'name' => fake()->name(),
            'year' => fake()->date(),
            'teacher_id' => fake()->randomNumber(1),
            'grade_id' => fake()->randomNumber(1),
            'remarks' => fake()->text(5)
        ];
    }
}
