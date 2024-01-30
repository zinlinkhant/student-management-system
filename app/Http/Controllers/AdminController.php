<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Parents;
use App\Models\student;
use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Exam;
use App\Models\exam_result;
use App\Models\exam_type;
use App\Models\Grade;

use App\Models\Teacher;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = student::count();
        $parents = Parents::count();
        $teachers = Teacher::count();
        $class_stu = Classroom::with(['students'])->get();
        $stu_class = student::with(['classrooms'])->get();
        $classrooms = Classroom::count();
        $exam_type = exam_type::all();
        $exam_result = exam_result::all();
        $exam = Exam::count();
        $attendance = Attendance::count();
        $course = Course::count();
        $grade = Grade::count();
        return view('admin.index', compact('students', 'parents', 'class_stu', 'stu_class', 'classrooms', 'teachers', 'exam_type', 'exam_result', 'exam', 'attendance', 'course', 'grade'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function stu_pa()
    {
        $students = student::paginate(10);
        $parents = Parents::paginate(10);
        return view('admin.student_parent', compact('students', 'parents'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
