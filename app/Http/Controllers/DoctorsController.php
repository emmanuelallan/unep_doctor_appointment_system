<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function show(Doctor $doctor){
        return view('doctors.show', compact('doctor'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->fist_name = $request->fist_name;
        $doctor->last_name = $request->last_name;
        $doctor->specialty = $request->specialty;
        $doctor->years_of_experience = $request->years_of_experience;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->save();
        return redirect('/doctors');
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->fist_name = $request->fist_name;
        $doctor->last_name = $request->last_name;
        $doctor->specialty = $request->specialty;
        $doctor->years_of_experience = $request->years_of_experience;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->save();
        return redirect('/doctors');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctors');
    }
}
