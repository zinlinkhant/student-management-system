<?php

use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/student/register', [StudentController::class, 'create'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'store'])->name('student.register')->middleware('checkStatus');

Route::get('/teacher/register', [TeacherController::class, 'create'])->name('teacher.register');
Route::post('/teacher/register', [TeacherController::class, 'store'])->name('teacher.register');

Route::get('/parent/register', [ParentsController::class, 'create'])->name('parent.register');
Route::post('/parent/register', [ParentsController::class, 'store'])->name('parent.register');
