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
});

Route::get('/admin', 'AdminController@index');
/* Route::get('/admin/{personid}/{newname}', 'AdminController@edit'); */
Route::get('admin/hide/{id}', 'AdminController@hide');
Route::post('admin', 'AdminController@delete');

Route::get('myform', function() {
    return view('myform');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
