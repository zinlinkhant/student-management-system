<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/index', [Controller::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/enrollGrade/{user}', [Controller::class, 'enrollGrade'])->name('enrollGrade');
    Route::post('/enrollGrade', [Controller::class, 'enrollGradeUser'])->name('enrollGradeUser');
});

Route::middleware('auth')->group(
    function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/index1', [Controller::class, 'index1'])->name('index1');
        Route::get('/admin/stu_pa', [AdminController::class, 'stu_pa'])->name('admin.stu_pa');
        Route::get('/admin/teachers', [AdminController::class, 'teachers'])->name('admin.teachers');
        Route::get('/admin/classrooms', [AdminController::class, 'classrooms'])->name('admin.classrooms');
        Route::get('/admin/course_grade', [AdminController::class, 'course_grade'])->name('admin.course_grade');
        Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
        Route::get('/admin/allowStudent', [AdminController::class, 'allowStudent'])->name('admin.allowStudent');
        Route::get('/admin/updateUser/{user}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
        Route::post('/admin/updateUserRole', [AdminController::class, 'updateUserRole'])->name('admin.updateUserRole');
        Route::post('/admin/removeUserRole', [AdminController::class, 'removeUserRole'])->name('admin.removeUserRole');
        Route::get('/admin/removeUser/{user}', [AdminController::class, 'removeUser'])->name('admin.removeUser');
        Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    }
);
Route::middleware('auth')->group(
    function () {
        Route::get('/students/{teacher}', [TeacherController::class, 'students'])->name('teacher.students');
        Route::get('/detail_student/{student}', [TeacherController::class, 'detail_student'])->name('teacher.detail_student');
        Route::get('/detail_course/{course}', [TeacherController::class, 'detail_course'])->name('teacher.detail_course');
        Route::get('/detail_classroom/{classroom}', [TeacherController::class, 'detail_classroom'])->name('teacher.detail_classroom');
        Route::put('/update_classroom/{classroom}', [TeacherController::class, 'update_classroom'])->name('teacher.update_classroom');
        Route::put('/update_course/{course}', [TeacherController::class, 'update_course'])->name('teacher.update_course');
        Route::get('/create_course', [AdminController::class, 'create_course'])->name('teacher.create_course');
        Route::post('/store_course', [AdminController::class, 'store_course'])->name('teacher.store_course');
        Route::put('/update_student/{student}', [TeacherController::class, 'update_student'])->name('teacher.update_student');
        Route::delete('/delete_grade_student/{student}', [TeacherController::class, 'delete_grade_student'])->name('teacher.delete_grade_student');
        Route::get('/class_course/{teacher}', [TeacherController::class, 'class_course'])->name('teacher.class_course');
        Route::put('/course/edit/{course}', [TeacherController::class, 'editCourse'])->name('teacher.editCourse');
    }
);
Route::get('/student/classrooms/{student}', [StudentController::class, 'classrooms'])->name('student.classrooms')->middleware('checkRole');

require __DIR__ . '/auth.php';
require __DIR__ . '/student_parent.php';
require __DIR__ . '/role_per.php';
