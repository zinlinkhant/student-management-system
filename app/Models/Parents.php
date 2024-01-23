<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student_id',
    ];
    public function student()
    {
        return $this->hasMany(student::class);
    }
}
