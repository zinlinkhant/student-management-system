<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'password',
        'fname',
        'lname',
        'dob',
        'phone',
        'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parents_id');
    }
    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_students');
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    public function exam_results()
    {
        return $this->hasMany(exam_result::class);
    }
}
