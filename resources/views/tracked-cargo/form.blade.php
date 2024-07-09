@extends('layouts.app')

@section('template_title')
    {{ $trackedCargo->name ?? __('Edit') . " " . __('Tracked Cargo') }}
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4 border-b">
                <h2 class="text-xl font-semibold text-gray-800">{{ $trackedCargo->name ?? __('Edit') . " " . __('Tracked Cargo') }}</h2>
            </div>

            <div class="p-4">
                <form action="{{ $trackedCargo->id ? route('tracked-cargos.update', $trackedCargo->id) : route('tracked-cargos.store') }}" method="POST">
                    @csrf
                    @if ($trackedCargo->id)
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="awbno" class="block text-sm font-medium text-gray-700">Awbno</label>
                        <input type="text" name="awbno" id="awbno" placeholder="Awbno" value="{{ old('awbno', $trackedCargo->awbno) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('awbno') border-red-500 @enderror">
                        @error('awbno')
                            <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="flight" class="block text-sm font-medium text-gray-700">Flight</label>
                        <input type="text" name="flight" id="flight" placeholder="Flight" value="{{ old('flight', $trackedCargo->flight) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('flight') border-red-500 @enderror">
                        @error('flight')
                            <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <input type="text" name="status" id="status" placeholder="Status" value="{{ old('status', $trackedCargo->status) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('status') border-red-500 @enderror">
                        @error('status')
                            <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" name="location" id="location" placeholder="Location" value="{{ old('location', $trackedCargo->location) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('location') border-red-500 @enderror">
                        @error('location')
                            <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
