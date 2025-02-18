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




Route::get('/admin', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});



Route::post('/login_action', 'App\Http\Controllers\LoginController@login'); 

Route::post('/form_action', 'App\Http\Controllers\LoginController@form'); 

Route::get('/viewdata', 'App\Http\Controllers\LoginController@dview');

Route::get('/edit/{id}', 'App\Http\Controllers\LoginController@dedit');

Route::post('/updatedetails', 'App\Http\Controllers\LoginController@dupdate');

Route::post('/dashboard', 'App\Http\Controllers\LoginController@dashboard');

Route::get('/deletedata/{id}', 'App\Http\Controllers\LoginController@delete');

Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/login_action', function () {
    return view('login');
});


Route::get('/index', 'App\Http\Controllers\LoginController@courses');

Route::get('/index1', 'App\Http\Controllers\LoginController@courses1');

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/register', function () {
    return view('register');
});

Route::post('/register_action', 'App\Http\Controllers\LoginController@register');


Route::get('/userlogin', function () {
    return view('userlogin');
});


Route::post('/userlogin_action', 'App\Http\Controllers\LoginController@userlogin'); 

Route::get('/registerdata', 'App\Http\Controllers\LoginController@registerview');

Route::get('/deleteuser/{id}', 'App\Http\Controllers\LoginController@deleteuser');



Route::get('/userlogin_action', function () {
    return view('userlogin');
});

Route::get('/joincourse/{id}', 'App\Http\Controllers\LoginController@joinclass');

Route::post('/courseupdate', 'App\Http\Controllers\LoginController@usercourse'); 

Route::get('/courseupdate', function () {
    return view('userlogin');
});

Route::get('/userlogout', 'App\Http\Controllers\LoginController@userlogout')->name('userlogout');



Route::get('/viewjoincourse', 'App\Http\Controllers\LoginController@viewcourse');

Route::get('/approve/{id}', 'App\Http\Controllers\LoginController@approved');

Route::get('/reject/{id}', 'App\Http\Controllers\LoginController@rejected');

Route::get('/viewjoin', 'App\Http\Controllers\LoginController@viewjoin');

Route::get('/course', 'App\Http\Controllers\LoginController@course');

Route::get('/deletecourse/{id}', 'App\Http\Controllers\LoginController@deletecourse');
