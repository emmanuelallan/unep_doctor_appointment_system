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

Route::get('/doctors', [\App\Http\Controllers\DoctorsController::class, 'index'])->name('doctors.index');
Route::get('/doctors/create', [\App\Http\Controllers\DoctorsController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [\App\Http\Controllers\DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/doctors/{doctor}', [\App\Http\Controllers\DoctorsController::class, 'show'])->name('doctors.show');
Route::get('/doctors/{doctor}/edit', [\App\Http\Controllers\DoctorsController::class, 'edit'])->name('doctors.edit');
Route::put('/doctors/{doctor}', [\App\Http\Controllers\DoctorsController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{doctor}', [\App\Http\Controllers\DoctorsController::class, 'destroy'])->name('doctors.destroy');
