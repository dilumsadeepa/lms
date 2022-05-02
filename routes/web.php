<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('wel');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $users = DB::table('users')->count();
    $courses = DB::select('select * from courses');
    $addcourse = DB::select('select * from studentcourses');
    $assingcourse = DB::select('select * from assingcourses');
    $assco = DB::table('assingcourses')->count();
    return view('home', compact('courses','users','addcourse','assingcourse','assco'));
})->name('dashboard');


Route::resource('course','CourseController');
Route::resource('topic','TopicController');
Route::resource('content','ContentController');
Route::resource('lesson','LessonController');
Route::resource('studentcourse','StudentcourseController');
Route::resource('qrcr','QrcrController');
Route::resource('assingcourse','AssingcourseController');
Route::resource('coursede','CoursedeController');
