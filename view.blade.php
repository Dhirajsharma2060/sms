<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-2xl font-bold mb-6">{{ __('Enter Roll Number of Student') }}</h1>
                        <form action="{{ route('dashboard.show') }}" method="GET">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2" for="roll_no">
                                    {{ __('Roll Number') }}
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="roll_no" name="roll_no" type="text" placeholder="{{ __('Enter Roll Number') }}" required>
                            </div>
                            <div class="flex items-center justify-end">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    {{ __('View Student Details') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
