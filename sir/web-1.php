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
    return view('first_home');
});

Route::get('/login_in', function () {
    return view('first_home');
});
Route::get('/login_action', function () {
    return view('first_home');
});
 
//--------------------admin login action page------------------------------ -------------------->>>>>>>>>>>>>>>>>>>>>>>>
Route::post('/login_action', 'App\Http\Controllers\RegisterController@login'); 
 
//-----------------LOGOUT------------------------------------------------------------------------
Route::get('/logout_action','App\Http\Controllers\RegisterController@logout');

//--------------------staff REGISTER action page-------------------------- ------------------------->>>>>>>>>>>>>>>>>>>>>>>

Route::post('/staffreg_action', 'App\Http\Controllers\RegisterController@reg');

//--------------------student REGISTER action page------------------------------------------------------>>>>>>>>>>>>>>>>>>>>>>>

Route::post('/studentreg_action', 'App\Http\Controllers\RegisterController@sreg');




//--------------------staff VIEW action page-------------------------- -------------------->>>>>>>>>>>>>>>>>>>>>>>

Route::get('/viewstaffdetails', 'App\Http\Controllers\RegisterController@viewstaff');

//--------------------student VIEW action page---------------------------------------- ----------->>>>>>>>>>>>>>>>>>>>>>>
Route::get('/viewstudentdetails', 'App\Http\Controllers\RegisterController@viewstudent');



//--------------------staff EDIT action page------------------------------------ ------------->>>>>>>>>>>>>>>>>>>>>>>

Route::get('/editstaffdetails/{type}', 'App\Http\Controllers\RegisterController@editstaff');
//--------------------student EDIT action page------------------------------------ ------------->>>>>>>>>>>>>>>>>>>>>>>

Route::get('/editstudentdetails/{type}', 'App\Http\Controllers\RegisterController@editstudent');



//--------------------staff UPDATE action page------------------------------------------ ------------>>>>>>>>>>>>>>>>>>>>>>>

Route::post('/updatestaffdetails', 'App\Http\Controllers\RegisterController@updatestaff');
//--------------------student UPDATE action page------------------------------------------ ------------>>>>>>>>>>>>>>>>>>>>>>>

Route::post('/updatestudentdetails', 'App\Http\Controllers\RegisterController@updatestudent');

 
//--------------------staff REMOVE action page------------------------------------------ ------------>>>>>>>>>>>>>>>>>>>>>>>

Route::get('/removestaffdetails/{type}', 'App\Http\Controllers\RegisterController@removestaff');
 
//--------------------student REMOVE action page------------------------------------------ ------------>>>>>>>>>>>>>>>>>>>>>>>

Route::get('/removestudentdetails/{type}', 'App\Http\Controllers\RegisterController@removestudent');

 
//---------------------------CLASS WISE STUDENT DETAILS-1--------------------------------
Route::get('/viewclassdetails', 'App\Http\Controllers\RegisterController@viewfirstclass'); 



























//localhost/laravelproject  type panna enna page verum ----------------------------------------------- ********************
 
Route::get('/', function () {//('/') emptyaa erntha client side open aagum ('\admin') erntha admin side open aagum
    return view('first_home');
});





//Admin dashboard----------------------------------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/admindashboard', function () {
    return view('admin_dashboard');
});

//Admin dashboard nave bars-addstaffdetails--------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/addstaffdetails', function () { 
    return view('addstaffdetails');
});
//Admin dashboard nave bars-addstudentdetails------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/addstudentdetails', function () {
    return view('addstudentdetails');
});
//Admin dashboard nave bars-viewstaffdetails--------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/viewtaffdetails', function () { 
    return view('viewstaffdetails');
});
//Admin dashboard nave bars-viewstudentdetails------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/viewtudentdetails', function () {
    return view('viewstudentdetails');
});
//Admin dashboard nave bars-viewclass------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Route::get('/viewlassdetails', function () {
    return view('viewclassdetails');
});




