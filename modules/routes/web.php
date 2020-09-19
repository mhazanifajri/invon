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
//@ frontend
Route::get('/', function () {
    return 'frontend';
});

//@ setAuth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//@ login
Route::get('admin', 'Login\LoginController@index'); /// '@' untuk memilih sebuah method dlm class
Route::post('admin', 'Login\LoginController@auth')->name('auth.attempt'); /// initial sebuah route_name

//@ admin
Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');

//@ guest
Route::resource('admin/guest','Admin\GuestController'); /// mendifinisikan bbrapa method secara lgsung
Route::get('guest/create', 'Admin\GuestController@create'); /// datatables data
