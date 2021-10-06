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
Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

######################################################## ####################################################
Route::resource('students', 'StudentCon');
####################### courses routes ########################
Route::resource('courses', 'CourseCon');
####################### company-payments routes ########################
Route::resource('payments', 'PayCont');
####################### jobs routes ########################
Route::resource('jobs', 'JobCon');
####################### employee routes ########################
Route::resource('employee', 'EmployeeCon');
####################### employee routes ########################
Route::resource('events', 'EventCon');
####################### employee routes ########################
Route::resource('contacts', 'ContactCon');
######################################################## ####################################################

Route::get('/{page}', 'AdminController@index');
