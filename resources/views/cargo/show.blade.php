@extends('layouts.app')

@section('template_title')
    {{ $cargo->name ?? __('Show') . " " . __('Cargo') }}
@endsection

@section('content')
    <section class="content container mx-auto">
        <div class="bg-white shadow-md rounded-lg">
            <div class="flex justify-between items-center bg-gray-200 px-4 py-3">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Show Cargo') }}</h2>
                <a class="btn btn-primary btn-sm" href="{{ route('cargos.index') }}">{{ __('Back') }}</a>
            </div>

            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <th class="bg-gray-100 border-b border-gray-200 text-left px-4 py-2" style="width: 30%;">Awbno:</th>
                                <td class="border-b border-gray-200 px-4 py-2">{{ $cargo->awbno }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 border-b border-gray-200 text-left px-4 py-2">From:</th>
                                <td class="border-b border-gray-200 px-4 py-2">{{ $cargo->from }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 border-b border-gray-200 text-left px-4 py-2">To:</th>
                                <td class="border-b border-gray-200 px-4 py-2">{{ $cargo->to }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 border-b border-gray-200 text-left px-4 py-2">Weight:</th>
                                <td class="border-b border-gray-200 px-4 py-2">{{ $cargo->weight }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-100 border-b border-gray-200 text-left px-4 py-2">Pieces:</th>
                                <td class="border-b border-gray-200 px-4 py-2">{{ $cargo->pieces }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
