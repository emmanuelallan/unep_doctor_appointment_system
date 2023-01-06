<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if current user is admin, show all appointments else show only current user's appointments
        if (auth()->user()->is_admin) {
            $appointments = Appointment::with('doctor', 'patient')->get();
        } else {
            $appointments = Appointment::with('doctor', 'patient')->where('doctor_id', auth()->id())->get();
        }

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('appointments.create', compact('doctors', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'status' => 'required',
            'appointment_type' => 'required',
            'description' => 'nullable',
            'patient_id' => 'required',
            'doctor_id' => 'required',
        ]);

        $appointment = Appointment::create($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)

    {
        $appointment = Appointment::with('doctor', 'patient')->find($appointment->id);

        return view('appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('appointments.edit', compact('appointment', 'doctors', 'patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'status' => 'required',
            'appointment_type' => 'required',
            'description' => 'nullable',
            'patient_id' => 'required',
            'doctor_id' => 'required',
        ]);

        $appointment->update($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment deleted successfully');
    }
}
