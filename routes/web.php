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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//guest
Route::get('/guest/home',function(){
    return view('guest.home');
});

Route::get('/guest/aboutus',function(){
    return view('guest.about');
});

Route::get('/guest/contactus',function(){
    return view('guest.contactus');
});

Route::get('/guest/video',function(){
    return view('guest.video');
});

//parent
Route::get('/parent/home',function(){
    return view('parent.home');
});

Route::get('/parent/aboutus',function(){
    return view('parent.about');
});

Route::get('/parent/contactus',function(){
    return view('parent.contactus');
});

Route::get('/parent/video',function(){
    return view('parent.video');
});

Route::get('/parent/parentview',function(){
    return view('parent.parentview');
});

//teacher
Route::get('/teacher/home',function(){
    return view('teacher.home');
});

Route::get('/teacher/aboutus',function(){
    return view('teacher.about');
});

Route::get('/teacher/contactus',function(){
    return view('teacher.contactus');
});

Route::get('/teacher/video',function(){
    return view('teacher.video');
});

Route::get('/teacher/comment',function(){
    return view('teacher.comment');
});

//student
Route::get('/student/home',function(){
    return view('student.home');
});

Route::get('/student/aboutus',function(){
    return view('student.about');
});

Route::get('/student/contactus',function(){
    return view('student.contactus');
});

Route::get('/student/video',function(){
    return view('student.video');
});

Route::get('/student/courses',function(){
    return view('student.courses');
});

Route::get('/student/profile',function(){
    return view('student.profile');
});



// Route::get('/student',function(){
//     return view('/student.index');
// });
// Route::get('app',function(){
//     return view('/layouts.app');
// });
// Route::get('Aboutus',function(){
//     return view('/aboutus');
// });
// Route::get('contactUS',function(){
//     return view('/contactus');
// });
// Route::get('videos',function(){
//     return view('/videos');
// });


