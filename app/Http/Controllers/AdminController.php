<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Parents;
use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Exam;
use App\Models\exam_result;
use App\Models\exam_type;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Role::findByName('student')->users()->count();;
        $parents = Parents::count();
        $teachers = Role::findByName('teacher')->users()->count();
        $class_stu = Classroom::with(['students'])->get();
        $stu_class = Student::with(['classrooms'])->get();
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
        $students = Student::paginate(10);
        return view('admin.student_parent', compact('students'));
    }
    public function teachers()
    {
        $teachers = Teacher::paginate(10);
        return view('admin.teachers', compact('teachers'));
    }
    public function classrooms()
    {
        $classrooms = Classroom::paginate(10);
        return view('admin.classrooms', compact('classrooms'));
    }
    public function course_grade()
    {
        $grades = Grade::paginate(10);
        $courses = Course::paginate(10);
        return view('admin.course_grade', compact('grades', 'courses'));
    }
    public function user()
    {
        $ucount = User::count();
        $users = User::paginate(50);
        return view('admin.user', compact('users', 'ucount'));
    }
    public function allowStudent()
    {
        return view('admin.allowStudentRequest');
    }
    public function updateUser(User $user)
    {
        $users = User::find($user);
        $role = Role::all();
        return view('admin.updateUser', compact('users', 'role'));
    }
    public function removeUser(User $user)
    {
        $users = User::find($user);
        $role = Role::all();
        return view('admin.removeUserRole', compact('users', 'role'));
    }
    public function updateUserRole(Request $request)
    {
        $user = User::find($request->userId);

        if ($user) {
            $user->assignRole($request->role);
        } else {
            return 'fail';
        }

        return redirect('admin/user');
    }
    public function removeUserRole(Request $request)
    {

        $user = User::find($request->userId);
        if ($user) {
            $user->removeRole($request->role);
        } else {
            return 'fail';
        }

        return redirect('admin/user');
    }
    public function create_course()
    {
        //
        $classrooms = Classroom::all();
        return view('teacher.create_course', compact('classrooms'));
    }
    public function store_course(Request $request)
    {
        //
        // return $request;

        $new = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'grade_id' => 'required',
        ]);
        Course::create($new);
        return redirect(route('index'));
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
