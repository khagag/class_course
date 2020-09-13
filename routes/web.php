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

Auth::routes();

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/student', 'Auth\RegisterController@createStudent');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/student', 'student');

Route::get('/home', 'HomeController@index')->name('home');

// Students routes
Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/students/{student}', 'StudentController@show')->name('student.show');
Route::get('/student/create', 'StudentController@create')->name('student.create');
Route::post('/student/store', 'StudentController@store')->name('student.store');
Route::get('/student/{student}/edit', 'StudentController@edit')->name('student.edit');
Route::post('/student/{student}/update', 'StudentController@update')->name('student.update');
Route::post('/student/delete', 'StudentController@destroy')->name('student.destroy');
