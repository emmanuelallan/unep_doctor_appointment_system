<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-start">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Appointment') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900">
                    <form method="POST" action="{{ route('appointments.store') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="appointment_date" :value="__('Appointment Date')" />
                            <x-text-input id="appointment_date" class="block mt-1 w-full" type="date" name="appointment_date" required autofocus />
                            <x-input-error :messages="$errors->get('appointment_date')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="appointment_time" :value="__('Appointment Time')" />
                            <x-text-input id="appointment_time" class="block mt-1 w-full" type="time" name="appointment_time" required autofocus />
                            <x-input-error :messages="$errors->get('appointment_time')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <x-input-label for="doctor_id" :value="__('Doctor')" />
                                <select name="doctor_id" id="doctor_id" class="block mt-1 w-full">
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('doctor_id')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="patient_id" :value="__('Patient')" />
                                <select name="patient_id" id="patient_id" class="block mt-1 w-full">
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('patient_id')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <x-input-label for="appointment_type" :value="__('Appointment Type')" />
                                <select name="appointment_type" id="appointment_type" class="block mt-1 w-full">
                                    <option value="1">In-Person</option>
                                    <option value="2">Video Call</option>
                                </select>
                                <x-input-error :messages="$errors->get('appointment_type')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="status" :value="__('Status')" />
                                <select name="status" id="status" class="block mt-1 w-full">
                                    <option value="1" selected>Pending</option>
                                    <option value="2">Confirmed</option>
                                    <option value="3">Cancelled</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description" required></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
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
