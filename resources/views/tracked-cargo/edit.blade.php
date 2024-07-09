@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tracked Cargo
@endsection

@section('content')
    <section class="content container mx-auto py-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">{{ __('Update') }} Tracked Cargo</h2>
                </div>

                <div class="p-4">
                    <form method="POST" action="{{ route('tracked-cargos.update', $trackedCargo->id) }}" role="form" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        @include('tracked-cargo.form')

                        <div class="flex justify-end mt-6">
                            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

