<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom_student extends Model
{
    protected  $fillable = [
        'classroom_id',
        'student_id'
    ];
    use HasFactory;
    public function student()
    {
        return $this->belongsTo('student_id');
    }
}
