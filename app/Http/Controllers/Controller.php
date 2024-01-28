<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Exam;
use App\Models\exam_result;
use App\Models\exam_type;
use App\Models\Grade;
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
        $exam_type = exam_type::all();
        $exam_result = exam_result::all();
        $exam = Exam::all();
        $attendance = Attendance::all();
        $course = Course::all();
        $grade = Grade::all();
        return view('index', compact('students', 'parents', 'class_stu', 'stu_class', 'classrooms', 'teachers', 'exam_type', 'exam_result', 'exam', 'attendance', 'course', 'grade'));
    }
    public function index1()
    {
        return view('index1');
    }
}