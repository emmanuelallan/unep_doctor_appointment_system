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

// dashboard
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('/doctors', 'DoctorsController@index')->name('doctors.index');
Route::get('/doctors/create', 'DoctorsController@create');
Route::post('/doctors', 'DoctorsController@store');
Route::get('/doctors/{id}', 'DoctorsController@show');
Route::get('/doctors/{id}/edit', 'DoctorsController@edit');
Route::put('/doctors/{id}', 'DoctorsController@update');
Route::delete('/doctors/{id}', 'DoctorsController@destroy');
