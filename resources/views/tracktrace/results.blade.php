@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="text-center">
            @if ($cargos->isEmpty() && $tcargos->isEmpty())
                <p>No results found.</p>
            @else
                <h1 class="text-3xl font-semibold mb-4">Now Tracking: {{ $search }}</h1>

                @if (!$cargos->isEmpty())
                    <h2 class="text-2xl font-semibold mb-2">Cargos</h2>
                    <table class="border-collapse border border-black mx-auto">
                        <thead class="bg-blue-200 dark:bg-gray-700">
                            <tr>
                                <th class="border border-black px-4 py-2 text-black">From</th>
                                <th class="border border-black px-4 py-2 text-black">To</th>
                                <th class="border border-black px-4 py-2 text-black">Weight</th>
                                <th class="border border-black px-4 py-2 text-black">Pieces</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cargos as $cargo)
                                <tr>
                                    <td class="border border-black px-4 py-2">{{ $cargo->from }}</td>
                                    <td class="border border-black px-4 py-2">{{ $cargo->to }}</td>
                                    <td class="border border-black px-4 py-2">{{ $cargo->weight }}</td>
                                    <td class="border border-black px-4 py-2">{{ $cargo->pieces }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if (!$tcargos->isEmpty())
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Tracked Cargos</h2>
                    <table class="border-collapse border border-black mx-auto">
                        <thead class="bg-blue-200 dark:bg-gray-700">
                            <tr>
                                <th class="border border-black px-4 py-2 text-black">Flight</th>
                                <th class="border border-black px-4 py-2 text-black">Status</th>
                                <th class="border border-black px-4 py-2 text-black">Location</th>
                                <th class="border border-black px-4 py-2 text-black">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tcargos as $tcargo)
                                <tr>
                                    <td class="border border-black px-4 py-2">{{ $tcargo->flight }}</td>
                                    <td class="border border-black px-4 py-2">{{ $tcargo->status }}</td>
                                    <td class="border border-black px-4 py-2">{{ $tcargo->location }}</td>
                                    <td class="border border-black px-4 py-2">{{ $tcargo->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            @endif
        </div>
    </div>
@endsection
