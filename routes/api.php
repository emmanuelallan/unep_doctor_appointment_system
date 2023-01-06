<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookings/all', function () {
    return App\Models\Appointment::all();
});

Route::get('vendor/doctor/{doctor_name}', function ($doctor_name) {
    return App\Models\Appointment::where('first_name', $doctor_name)->get();
});

Route::get('bookings/patient/{patient_name}', function ($patient_name) {
    return App\Models\Appointment::where('first_name', $patient_name)->get();
});