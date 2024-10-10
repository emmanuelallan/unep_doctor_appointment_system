<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::with('user')->get();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'specialty' => 'required',
            'bio' => 'required',
            'years_of_experience' => 'required',
            'phone' => 'required',
            'email' => 'required|email', // Validate email
            'password' => 'required|min:6', // Validate password
        ]);
    
        // Check if email exists
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect()->back()->with('error', 'Email already exists');
        }
    
        // Start transaction
        DB::beginTransaction();
        
        try {
            // Create the user
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            // Create the doctor and associate the user_id
            $doctor = new Doctor([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'age' => $request->get('age'),
                'gender' => $request->get('gender'),
                'specialty' => $request->get('specialty'),
                'bio' => $request->get('bio'),
                'years_of_experience' => $request->get('years_of_experience'),
                'phone' => $request->get('phone'),
                'user_id' => $user->id, // Set user_id from the newly created user
            ]);
    
            $doctor->save(); // Save the doctor
    
            DB::commit(); // Commit the transaction
            return redirect('/doctors')->with('success', 'Doctor saved!');
            
        } catch (\Exception $e) {
            // If something goes wrong, rollback the transaction
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create doctor and user');
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $doctor = Doctor::with('user')->find($doctor->id);
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $doctor = Doctor::with('user')->find($doctor->id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'specialty' => 'required',
            'bio' => 'required',
            'years_of_experience' => 'required',
            'phone' => 'required',
        ]);

        $doctor = Doctor::with('user')->find($doctor->id);
        $doctor->first_name = $request->get('first_name');
        $doctor->last_name = $request->get('last_name');
        $doctor->age = $request->get('age');
        $doctor->gender = $request->get('gender');
        $doctor->specialty = $request->get('specialty');
        $doctor->bio = $request->get('bio');
        $doctor->years_of_experience = $request->get('years_of_experience');
        $doctor->phone = $request->get('phone');
        $doctor->user->email = $request->get('email');
        $doctor->user->password = Hash::make($request->get('password'));
        $doctor->push();
        return redirect('/doctors')->with('success', 'Doctor updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctors')->with('success', 'Doctor deleted!');
    }
}
