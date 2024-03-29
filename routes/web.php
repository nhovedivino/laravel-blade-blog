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

// route to default page
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// route to dashboard
Route::get('/dashboard', 'HomeController@index'); 
