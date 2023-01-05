@extends('layout.app')
@section('content')
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link active" aria-current="page">
                    <i class="bi bi-grid-1x2 pe-none me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('doctors')}}" class="nav-link text-white">
                    <i class="bi bi-person-bounding-box pe-none me-2"></i>
                    Doctors
                </a>
            </li>
            <li>
                <a href="{{route('patients')}}" class="nav-link text-white">
                    <i class="bi bi-people pe-none me-2"></i>
                    Patients
                </a>
            </li>
            <li>
                <a href="{{route('appointments')}}" class="nav-link text-white">
                    <i class="bi bi-journal-bookmark pe-none me-2"></i>
                    Appointments
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                    <a class="dropdown-item" href="{{route('setting')}}">
                        <i class="bi bi-gear pe-none me-2"></i>
                        Setting
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-box-arrow-right pe-none me-2"></i>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
