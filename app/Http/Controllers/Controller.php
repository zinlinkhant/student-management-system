<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\classroom_student;
use App\Models\Course;
use App\Models\Exam;
use App\Models\exam_result;
use App\Models\exam_type;
use App\Models\Grade;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $students = Student::all();
        $parents = Parents::all();
        $teachers = Teacher::all();
        $class_stu = Classroom::with(['students'])->get();
        $stu_class = Student::with(['classrooms'])->get();
        $classrooms = Classroom::all();
        $exam_type = exam_type::all();
        $exam_result = exam_result::all();
        $exam = Exam::all();
        $attendance = Attendance::all();
        $course = Course::all();
        $grade = Grade::all();
        return view('index', compact('students', 'parents', 'class_stu', 'stu_class', 'classrooms', 'teachers', 'exam_type', 'exam_result', 'exam', 'attendance', 'course', 'grade'));
    }
    public function enrollGrade(User $user)
    {
        $grades = Grade::all();
        return view('enrollGrade', compact('grades', 'user'));
    }
    public function enrollGradeUser(Request $request)
    {
        $new = $request->all();
        classroom_student::create($new);
        return redirect('/');
    }
}
