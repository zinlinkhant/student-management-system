<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/index', [Controller::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/index1', [Controller::class, 'index1'])->name('index1');
Route::get('/admin/stu_pa', [AdminController::class, 'stu_pa'])->name('admin.stu_pa');
Route::get('/admin/teachers', [AdminController::class, 'teachers'])->name('admin.teachers');
Route::get('/admin/classrooms', [AdminController::class, 'classrooms'])->name('admin.classrooms');
Route::get('/admin/course_grade', [AdminController::class, 'course_grade'])->name('admin.course_grade');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/updateUser/{user}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
Route::post('/admin/updateUserRole', [AdminController::class, 'updateUserRole'])->name('admin.updateUserRole');

require __DIR__ . '/auth.php';
require __DIR__ . '/student_parent.php';
require __DIR__ . '/role_per.php';
