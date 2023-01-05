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

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/doctors', [\App\Http\Controllers\DoctorsController::class, 'index'])->name('doctors');
Route::get('/patients', [\App\Http\Controllers\PatientsController::class, 'index'])->name('patients');
Route::get('/appointments', [\App\Http\Controllers\AppointmentsController::class, 'index'])->name('appointments');
Route::get('/setting', [\App\Http\Controllers\SettingsController::class, 'index'])->name('setting');
