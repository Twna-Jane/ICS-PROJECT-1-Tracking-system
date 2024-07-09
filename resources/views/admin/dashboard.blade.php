@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-3xl font-bold mb-6">{{ __("Welcome!") }}</h3>
                    <p class="text-lg mb-4">{{ __("You are logged in as an administrator.") }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __("Manage cargo details here.") }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

