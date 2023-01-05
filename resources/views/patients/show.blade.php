<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $patient->first_name }} {{ $patient->last_name }}
            </h2>
            <a href="{{ route('patients.create') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-person-add mr-2"></i> {{ __('Add Patient') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900">
                    <div class="flex items-center flex-col w-2/6 border-r border-gray-100">
                        <div class="flex-shrink-0 mb-3">
                            <img class="rounded-full" src="https://via.placeholder.com/200" alt="{{ $patient->first_name }}">
                        </div>
                        <div class="ml-4">
                            <div class="font-bold text-xl text-gray-900 capitalize text-center mb-1">
                                Dr. {{ $patient->first_name }} {{ $patient->last_name }}
                            </div>
                            <div class="font-medium text-gray-500 text-center">
                                {{ $patient->age }} years old
                            </div>
                            <div class="text-sm text-gray-500 text-center">
                                {{ $patient->phone }}
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col w-4/6 ml-10">
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Symptoms') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $patient->symptoms }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Description') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $patient->description }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Gender') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $patient->gender }}
                        </div>
                        <h2 class="font-bold text-base text-gray-900 capitalize mb-2">
                            {{ __('Medical History') }}
                        </h2>
                        <div class="ml-4 mb-4">
                            {{ $patient->medical_history }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
            <a href="{{ route('patients.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-chevron-bar-left mr-2"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
</x-app-layout>
