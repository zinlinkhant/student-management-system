<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Parents;
use App\Models\student;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $students = student::all();
        $parents = Parents::all();
        $teachers = Teacher::all();
        $class_stu = Classroom::with(['students'])->get();
        $stu_class = student::with(['classrooms'])->get();
        $classrooms = Classroom::all();
        return view('index', compact('students', 'parents', 'class_stu', 'stu_class', 'classrooms', 'teachers'));
    }
    public function index1()
    {
        return view('index1');
    }
}
