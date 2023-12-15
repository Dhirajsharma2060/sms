<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-2xl font-bold mb-6">{{ __('Enter Roll No.') }}</h1>
                        <form method="GET" action="{{ route('dashboard.show', ['student' => '']) }}">
                            @csrf
                            <div class="mb-4">
                                <label class="text-gray-600 font-bold">{{ __('Roll No.') }}</label>
                                <input type="text" class="form-input mt-1 block w-full" name="student" placeholder="{{ __('Enter Roll No.') }}" required autofocus />
                            </div>

                            <div class="mt-8">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">{{ __('Search') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

