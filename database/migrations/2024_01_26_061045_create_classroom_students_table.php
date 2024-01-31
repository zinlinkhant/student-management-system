<?php

use App\Models\Classroom;
use App\Models\student;
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
        Schema::create('classroom_students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Classroom::class);
            $table->foreignIdFor(student::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_students');
    }
};
