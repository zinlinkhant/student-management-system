<?php

use App\Models\Course;
use App\Models\Exam;
use App\Models\student;
use App\Models\Student as ModelsStudent;
use App\Models\Students;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\MockObject\Builder\Stub;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(student::class);
            $table->foreignIdFor(Exam::class);
            $table->foreignIdFor(Course::class);
            $table->string('marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
