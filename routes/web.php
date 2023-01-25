<?php

use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Admission;
use App\Models\Classe;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Response;

Route::get('T_S/{id}', function ($id) {
    $teacher = Teacher::all();
    $T_S = Teacher::with('subjects')->whereId($id)->get();
    $fullDetail =Admission::find($id);
    return view('T_S', compact('T_S','teacher','fullDetail'));
});
Route::get('/teacher',function(){
$teacher=Teacher::find(1);
dd($teacher);
// return Response::json($teacher)
;});

Route::get('login', function () {return view('index');});
Route::redirect('/', 'login');

Route::get('admission', function () { return view('admission');});
Route::get('princi', function () {return view('princidb');});

Route::get('register', function () {return view('regidb');});
Route::get('teacher', function () {return view('teachdb');});

Route::get('student', function () {return view('student');});
Route::get('attendence', function () {return view('attendence');});

Route::get('subject', function () {return view('subject');});
Route::get('school', function () { return view('school');});

 Route::group(['middleware' => ['auth']], function () {
   Route::get('/dashboard', function () {
       return view('welcome');
    });
    Route::resource('roles', RoleController::class);
     Route::resource('users', UserController::class);
    Route::resource('products', ModuleController::class);
 });
Route::get('/admin/login', [AdminController::class . 'index']);
Route::get('/logout', [LogoutController::class . 'logout']);
