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


Route::get('/', 'MainController@showEmployees');

Route::get('/employees', 'MainController@pageEmployees')->name('employees');
Route::get('/employees/{emp_no}', 'MainController@infoEmployees')->name('info');
Route::get('/managers', 'MainController@ShowManagers')->name('managers');