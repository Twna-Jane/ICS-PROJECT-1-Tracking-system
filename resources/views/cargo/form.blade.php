@extends('layouts.app')

@section('template_title')
    {{ $cargo->name ?? __('Show') . " " . __('Cargo') }}
@endsection

@section('content')
    <section class="content container mx-auto py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ __('Show') }} Cargo</h2>
                    <a href="{{ route('cargos.index') }}" class="btn btn-primary btn-sm">{{ __('Back') }}</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="mb-4">
                            <strong class="text-gray-700 dark:text-gray-300">Awbno:</strong>
                            <span class="ml-2">{{ $cargo->awbno }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="text-gray-700 dark:text-gray-300">From:</strong>
                            <span class="ml-2">{{ $cargo->from }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="text-gray-700 dark:text-gray-300">To:</strong>
                            <span class="ml-2">{{ $cargo->to }}</span>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="mb-4">
                            <strong class="text-gray-700 dark:text-gray-300">Weight:</strong>
                            <span class="ml-2">{{ $cargo->weight }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="text-gray-700 dark:text-gray-300">Pieces:</strong>
                            <span class="ml-2">{{ $cargo->pieces }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
