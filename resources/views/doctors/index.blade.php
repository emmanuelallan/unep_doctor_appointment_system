@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-between flex-direction-col">
                <h1>Doctors</h1>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-person-add pe-none me-2"></i>
                    Add Doctor
                </a>
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
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                                <td>{{ $doctor->specialty }}</td>
                                <td>
                                    <i class="bi bi-eye pe-none me-2"></i>
                                    <i class="bi bi-pencil-square pe-none me-2"></i>
                                    <i class="bi bi-trash3 pe-none me-2"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
