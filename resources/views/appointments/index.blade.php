<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Appointments') }}
            </h2>
            <a href="{{ route('appointments.create') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-person-add mr-2"></i> {{ __('Add Appointment') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-separate border border-slate-400 table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 py-2">{{ __('Doctor') }}</th>
                                <th class="border border-slate-300 py-2">{{ __('Patient') }}</th>
                                <th class="border border-slate-300 py-2">{{ __('Appointment Date') }}</th>
                                <th class="border border-slate-300 py-2">{{ __('Appointment Time') }}</th>
                                <th class="border border-slate-300 py-2">{{ __('Status') }}</th>
                                <th class="border border-slate-300 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td class="border border-slate-300 py-3 px-3">{{ $appointment->doctor->fisrt_name }} {{ $appointment->doctor->last_name }}</td>
                                    <td class="border border-slate-300 py-3 px-3">{{ $appointment->patient->fisrt_name }} {{ $appointment->patient->last_name }}</td>
                                    <td class="border border-slate-300 py-3 px-3">{{ $appointment->appointment_date }}</td>
                                    <td class="border border-slate-300 py-3 px-3">{{ $appointment->appointment_time }}</td>
                                    <td class="border border-slate-300 py-3 px-3">{{ $appointment->status }}</td>
                                    <td class="flex items-center gap-4 justify-center border border-slate-300 py-3 px-3">
                                        <a href="{{ route('appointments.show', $appointment) }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('appointments.edit', $appointment) }}" class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
