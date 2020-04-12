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

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');


	Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/home', 'HomeController@Userindex')->name('home.Userindex');

    Route::get('viewManager', 'AdminController@viewManager')->name('viewManager');
    Route::delete('deleteManager/{id}','AdminController@deleteManager')->name('deleteManager');

    Route::get('viewStaff', 'AdminController@viewStaff')->name('viewStaff');
    Route::delete('deletestaff/{id}','AdminController@deletestaff')->name('deletestaff');



