@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-4">
    <div class="mb-8">
        <img src="{{ asset('cargo1.jpg') }}" alt="Image Description" class="w-full max-w-xs rounded-lg shadow-md">
    </div>

    @if ($cargos->isEmpty() && $tcargos->isEmpty())
        <p class="text-lg text-gray-700">No results found.</p>
    @else
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Now Tracking {{ $search }}</h1>
        
        <div class="w-full max-w-4xl mb-8">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 text-left">From</th>
                        <th class="px-4 py-2 text-left">To</th>
                        <th class="px-4 py-2 text-left">Weight</th>
                        <th class="px-4 py-2 text-left">Pieces</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cargos as $cargo)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $cargo->from }}</td>
                        <td class="px-4 py-2">{{ $cargo->to }}</td>
                        <td class="px-4 py-2">{{ $cargo->weight }}</td>
                        <td class="px-4 py-2">{{ $cargo->pieces }}</td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="w-full max-w-4xl">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 text-left">Flight</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Location</th>
                        <th class="px-4 py-2 text-left">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tcargos as $tcargo)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $tcargo->flight }}</td>
                        <td class="px-4 py-2">{{ $tcargo->status }}</td>
                        <td class="px-4 py-2">{{ $tcargo->location }}</td>
                        <td class="px-4 py-2">{{ $tcargo->created_at }}</td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection


