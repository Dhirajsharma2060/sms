<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-2xl font-bold mb-6">{{ __('Add Student') }}</h1>
                        <form method="POST" action="{{ route('dashboard.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="text-gray-600">{{ __('Roll No') }}</label>
                                <input type="text" name="roll_no" id="roll_no" class="border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600">{{ __('Name') }}</label>
                                <input type="text" name="name" id="name" class="border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600">{{ __('Phone') }}</label>
                                <input type="tel" name="phone" id="phone" class="border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                 <label class="text-gray-600">{{ __('Address') }}</label>
                                 <input type="text" name="address" id="address" class="border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Add Student') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>