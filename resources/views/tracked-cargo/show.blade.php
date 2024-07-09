@extends('layouts.app')

@section('template_title')
    {{ $trackedCargo->name ?? __('Show') . " " . __('Tracked Cargo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="flex justify-center items-center h-screen bg-blue-100"> 
            <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
                <h1 class="text-3xl font-semibold mb-6 text-center">{{ __('Show') }} Tracked Cargo</h1>

                <div class="mb-4">
                    <strong class="block mb-1">Awbno:</strong>
                    <span class="text-gray-700">{{ $trackedCargo->awbno }}</span>
                </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Awbno:</strong>
                                    {{ $trackedCargo->awbno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Flight:</strong>
                                    {{ $trackedCargo->flight }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $trackedCargo->status }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Location:</strong>
                                    {{ $trackedCargo->location }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
