@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Carrier Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-blue-900 dark:text-blue-100">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-semibold">{{ __("Welcome back!") }}</h1>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                        <div>
                            <img class="w-full h-auto" src="{{ asset('logo.jpg') }}" alt="Admin Dashboard Image">
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
