<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_type_id',
        'name',
        'start_date',
    ];
    public function exam_type()
    {
        return $this->belongsTo(exam_type::class);
    }
}
