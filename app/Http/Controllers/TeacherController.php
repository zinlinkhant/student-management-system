<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Grade;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::user();
        return view('teacherRegister', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $new = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
        ]);
        Teacher::create($new);
        return redirect()->route('index');
    }
    public function students(Teacher $teacher)
    {
        return view('teacher.student', compact('teacher'));
    }
    public function detail_student(Student $student)
    {
        $grades = Grade::all();
        return view('teacher.detail_student', compact('student', 'grades'));
    }
    public function detail_classroom(Classroom $classroom)
    {
        return view('teacher.detail_classroom', compact('classroom'));
    }
    public function update_classroom(Classroom $classroom, Request $request)
    {
        $new = $request->validate([
            'name' => 'required|string',
            'remarks' => 'required|string'
        ]);
        $classroom->update($new);
        return (redirect()->route('teacher.class_course', Auth::user()->teacher->id));
    }
    public function detail_course(Course $course)
    {
        $grade = Grade::all();
        return view('teacher.detail_course', compact('course', 'grade'));
    }
    public function update_course(Course $course, Request $request)
    {
        $new = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'grade' => 'required'
        ]);
        $course->update($new);
        return (redirect()->route('teacher.class_course', Auth::user()->teacher->id));
    }
    // public function detail_course(Course $course)
    // {
    //     return view('teacher.detail_student', compact('student'));
    // }
    public function class_course(Teacher $teacher)
    {
        return (view('teacher.class_course', compact('teacher')));
    }

    public function update_student(Student $student, Request $request)
    {
        $new = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'grade' => 'required',
        ]);
        return $new;
    }

    public function delete_grade_student(Student $student)
    {
        return $student;
    }
    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
