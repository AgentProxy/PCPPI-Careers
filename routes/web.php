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
    return view('welcome');
    return view('application');
});

Route::get('/forms/application/page1','FormController@application1');
Route::get('/forms/application/page2','FormController@application2');
Route::get('forms/compensation','FormController@compensation');

Route::get('/careers','HomeController@careers');
Route::get('/careers/position','HomeController@position');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');