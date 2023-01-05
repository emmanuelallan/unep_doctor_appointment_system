@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center flex-direction-col">
                <h1>{{ $doctor->name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Specialty
                        </th>
                        <th>
                            Years of Experience
                        </th>
                        <th>
                            Phone Number
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                            <td>{{ $doctor->specialty }}</td>
                            <td>{{ $doctor->years_of_experience }}</td>
                            <td>{{ $doctor->phone_number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('doctors.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
