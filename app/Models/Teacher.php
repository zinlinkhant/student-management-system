<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
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
    ];
    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
