<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'student_id',
        'status',
        'remark'
    ];
    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
