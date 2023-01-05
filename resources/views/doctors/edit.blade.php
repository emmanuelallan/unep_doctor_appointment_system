<?php
@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center flex-direction-col">
                <h1>Add Doctor</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="post" action="{{ route('doctors.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="{{ $doctor->first_name }}">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="{{ $doctor->last_name }}">
                    </div>

                    <div class="form-group">
                        <label for="years_of_experience">Years of Experience</label>
                        <input type="number" class="form-control" id="years_of_experience" name="years_of_experience" min="1" placeholder="Enter years of experience" value="{{ $doctor->years_of_experience }}">
                    </div>

                    <div class="form-group">
                        <label for="specialty">Specialty</label>
                        <select class="form-control" id="specialty" name="specialty">
                            <option value="Cardiologist" {{ $doctor->specialty == 'Cardiologist' ? 'selected' : '' }}>Cardiologist</option>
                            <option value="Dentist" {{ $doctor->specialty == 'Dentist' ? 'selected' : '' }}>Dentist</option>
                            <option value="Dermatologist" {{ $doctor->specialty == 'Dermatologist' ? 'selected' : '' }}>Dermatologist</option>
                            <option value="Gastroenterologist" {{ $doctor->specialty == 'Gastroenterologist' ? 'selected' : '' }}>Gastroenterologist</option>
                            <option value="Neurologist" {{ $doctor->specialty == 'Neurologist' ? 'selected' : '' }}>Neurologist</option>
                            <option value="Ophthalmologist" {{ $doctor->specialty == 'Ophthalmologist' ? 'selected' : '' }}>Ophthalmologist</option>
                            <option value="Orthopedist" {{ $doctor->specialty == 'Orthopedist' ? 'selected' : '' }}>Orthopedist</option>
                            <option value="Pediatrician" {{ $doctor->specialty == 'Pediatrician' ? 'selected' : '' }}>Pediatrician</option>
                            <option value="Psychiatrist" {{ $doctor->specialty == 'Psychiatrist' ? 'selected' : '' }}>Psychiatrist</option>
                            <option value="Surgeon" {{ $doctor->specialty == 'Surgeon' ? 'selected' : '' }}>Surgeon</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" value="{{ $doctor->phone }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('doctors.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
