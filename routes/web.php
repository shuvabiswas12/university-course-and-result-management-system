<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/course', function () {
    return view('course');
})->name('course');

Route::get('/allocate-classrooms', function () {
    return view('allocate-classrooms');
})->name('allocateClassrooms');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/teachers', function () {
    return view('teachers');
})->name('teachers');

Route::get('/course-assign', function () {
    return view('course-assign-to-teachers');
})->name('courseAssign');

Route::get('/course-statics', function () {
    return view('course-statics');
})->name('courseStatics');

Route::get('/register-students', function () {
    return view('register-students');
})->name('registerStudents');

Route::get('/schedule-and-classroom', function () {
    return view('schedule-and-classroom');
})->name('scheduleAndClassroom');

Route::get('/enroll-course', function () {
    return view('enroll-course');
})->name('enrollCourse');

Route::get('/save-student-result', function() {
    return view('save-student-result');
})->name('saveStudentResult');

Route::get('/view-result', function () {
    return view('view-result');
})->name('viewResult');

Route::get('unassign-all-courses', function () {
    return view('unassign-all-courses');
})->name('unAssignAllCourses');

Route::get('deallocate-all-classrooms', function () {
    return view('deallocate-all-classrooms');
})->name('deallocateAllClassrooms');
