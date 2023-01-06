<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Appointment Details') }}
            </h2>
            <a href="{{ route('appointments.create') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-person-add mr-2"></i> {{ __('Add Appointment') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900">
                    <div class="flex items-center flex-col w-3/6 border-r border-gray-100">
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Doctor') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            Dr. {{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Patient') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Status') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->status }}
                        </div>
                    </div>

                    <div class="flex flex-col w-3/6 ml-10">
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Appointment Date') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->appointment_date }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Appointment Time') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->appointment_time }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Description') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->description }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Appointment Type') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $appointment->appointment_type }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
            <a href="{{ route('appointments.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-chevron-bar-left mr-2"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
</x-app-layout>
