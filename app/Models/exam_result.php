<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'student_id',
        'course_id',
        'marks',
    ];
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
