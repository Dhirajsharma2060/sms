<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-2xl font-bold mb-6">{{ __('Update Information') }}</h1>
                        <form method="POST" action="{{ route('dashboard.update') }}">
                            @csrf
                            @method('PUT')

                            {{-- dd($student) --}}
                            <input type="hidden" name="roll_no" value="{{ $student->roll_no }}">

                            <div class="mb-4">
                                <label class="text-gray-600 font-bold">{{ __('Name') }}</label>
                                <input type="text" class="form-input mt-1 block w-full" name="name"  value="{{ $student->name }}" />
                            </div>

                            <div class="mb-4">
                                <label class="text-gray-600 font-bold">{{ __('Email') }}</label>
                                <input type="email" class="form-input mt-1 block w-full" name="email" placeholder="{{ __('Enter Email') }}" value="{{ $student->email }}"  />
                                @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="text-gray-600 font-bold">{{ __('Address') }}</label>
                                <input type="text" class="form-input mt-1 block w-full" name="address" placeholder="{{ __('Enter Address') }}" value="{{ $student->address }}"  />
                            </div>

                            <div class="mb-4">
                                <label class="text-gray-600 font-bold">{{ __('Phone') }}</label>
                                <input type="tel" class="form-input mt-1 block w-full" name="phone" placeholder="{{ __('Enter Phone') }}" value="{{ $student->phone }}"  />
                                @error('phone')
        <                           <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-8">
                                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2" /> {{-- {{ __('Update') }}</button> --}}
                                {{-- <a href="{{ route('dashboard.show', ['student' => $student->roll_no]) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancel') }}</a>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
