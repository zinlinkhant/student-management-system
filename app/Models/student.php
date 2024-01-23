<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
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
        'parents_id',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function parents()
    {
        return $this->belongsTo(Parents::class);
    }
    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_student');
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    public function exam_results()
    {
        return $this->hasMany(exam_result::class);
    }
}
