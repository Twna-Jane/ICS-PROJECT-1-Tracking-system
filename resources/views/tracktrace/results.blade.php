@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-4">
    @if ($cargos->isEmpty() && $tcargos->isEmpty())
        <p class="text-lg text-gray-700">No results found.</p>
    @else
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Now Tracking {{$search}}</h1>
        
        <div class="w-full max-w-4xl mb-8">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="w-1/4 px-4 py-2">From</th>
                        <th class="w-1/4 px-4 py-2">To</th>
                        <th class="w-1/4 px-4 py-2">Weight</th>
                        <th class="w-1/4 px-4 py-2">Pieces</th>
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
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="w-1/4 px-4 py-2">Flight</th>
                        <th class="w-1/4 px-4 py-2">Status</th>
                        <th class="w-1/4 px-4 py-2">Location</th>
                        <th class="w-1/4 px-4 py-2">Time</th>
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
