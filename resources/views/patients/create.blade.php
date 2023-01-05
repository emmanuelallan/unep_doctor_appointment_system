<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-start">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Patient') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900">
                    <form method="POST" action="{{ route('patients.store') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="symptoms" :value="__('Symptoms')" />
                            <x-text-input id="symptoms" class="block mt-1 w-full" type="text" name="symptoms" required autofocus />
                            <x-input-error :messages="$errors->get('symptoms')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" required autofocus />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <x-input-label for="first_name" :value="__('First')" />
                                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required autofocus />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="last_name" :value="__('Last')" />
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required autofocus />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <x-input-label for="age" :value="__('Age')" />
                                <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" required autofocus />
                                <x-input-error :messages="$errors->get('age')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="gender" :value="__('Gender')" />
                                <select id="gender" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description" required></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="medical_history" :value="__('Medical History')" />
                            <textarea id="medical_history" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="medical_history" required></textarea>
                            <x-input-error :messages="$errors->get('medical_history')" class="mt-2" />
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
            <a href="{{ route('patients.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="bi bi-chevron-bar-left mr-2"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
</x-app-layout>
