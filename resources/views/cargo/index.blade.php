@extends('layouts.app')

@section('template_title')
    Cargos
@endsection

@section('content')
<div class="container mx-auto py-4">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-gray-200 px-4 py-3">
            <h2 class="text-lg font-semibold text-gray-800">{{ __('Cargos') }}</h2>
            <a href="{{ route('cargos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Create New') }}
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative m-4" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <div class="p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('No') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('Awbno') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('From') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('To') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('Weight') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('Pieces') }}</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cargos as $cargo)
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b border-gray-200">{{ ++$i }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $cargo->awbno }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $cargo->from }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $cargo->to }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $cargo->weight }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $cargo->pieces }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <div class="flex">
                                        <a href="{{ route('cargos.show', $cargo->id) }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-1 px-3 rounded mr-2">
                                            {{ __('Show') }}
                                        </a>
                                        <a href="{{ route('cargos.edit', $cargo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded mr-2">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="event.preventDefault(); if(confirm('Are you sure to delete?')) { this.closest('form').submit(); }">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="px-4 py-3">
            {!! $cargos->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection

