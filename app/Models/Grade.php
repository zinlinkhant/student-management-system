<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function classroom()
    {
        return $this->belongsTo(Grade::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
