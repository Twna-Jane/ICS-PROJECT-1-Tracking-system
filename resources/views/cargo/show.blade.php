@extends('layouts.app')

@section('template_title')
    {{ $cargo->name ?? __('Show') . " " . __('Cargo') }}
@endsection

@section('content')
    <section class="content container mx-auto my-8">
        <div class="bg-white shadow-md rounded-lg">
            <div class="flex justify-between items-center bg-gray-200 px-6 py-4 rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Show Cargo') }}</h2>
                <a href="{{ route('cargos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Back') }}
                </a>
            </div>

            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <th class="bg-gray-100 text-left px-6 py-4 font-medium text-gray-900" style="width: 30%;">Awbno:</th>
                                <td class="px-6 py-4 text-gray-700">{{ $cargo->awbno }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 text-left px-6 py-4 font-medium text-gray-900">From:</th>
                                <td class="px-6 py-4 text-gray-700">{{ $cargo->from }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 text-left px-6 py-4 font-medium text-gray-900">To:</th>
                                <td class="px-6 py-4 text-gray-700">{{ $cargo->to }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 text-left px-6 py-4 font-medium text-gray-900">Weight:</th>
                                <td class="px-6 py-4 text-gray-700">{{ $cargo->weight }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 text-left px-6 py-4 font-medium text-gray-900">Pieces:</th>
                                <td class="px-6 py-4 text-gray-700">{{ $cargo->pieces }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
