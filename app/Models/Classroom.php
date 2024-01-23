<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillabel = [
        'name',
        'year',
        'teacher_id',
        'grade_id',
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function students()
    {
        return $this->belongsToMany(student::class, 'classroom_student');
    }
    public function grade()
    {
        return $this->hasOne(Grade::class);
    }
}
