<?php

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
    return view('index');
});

Route::get('/Gallery', function () {
    return view('Gallery');
});

Route::get('/carwash', function () {
    return view('carwash');
});

Route::get('/Arenda', function () {
    return view('Arenda');
});


Route::get('/reg1', function () {
    return view('reg1');
});


Route::get('/registration', function () {
    return view('registration');
});


Route::get('/statistika', function () {
    return view('statistika');
});
Route::get('/register', function () {
    return view('register');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
