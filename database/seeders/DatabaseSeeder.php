<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\classroom_student::factory(10)->create();
        \App\Models\student::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Attendance::factory(10)->create();
        \App\Models\Classroom::factory(10)->create();
        \App\Models\Parents::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\Exam::factory(10)->create();
        \App\Models\exam_result::factory(10)->create();
        \App\Models\exam_type::factory(10)->create();
        \App\Models\Grade::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}