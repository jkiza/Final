<?php
# @Author: izzy
# @Date:   2019-11-21T17:28:39+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T14:22:09+00:00




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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/patient/home', 'Patient\HomeController@index')->name('patient.home');
Route::get('/doctor/home', 'Doctor\HomeController@index')->name('doctor.home');
