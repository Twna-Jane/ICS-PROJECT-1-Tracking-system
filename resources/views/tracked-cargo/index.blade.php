@extends('layouts.app')

@section('template_title')
    Tracked Cargos
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4 border-b">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">{{ __('Tracked Cargos') }}</h2>
                    <a href="{{ route('tracked-cargos.create') }}" class="btn btn-primary btn-sm">{{ __('Create New') }}</a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="p-4 bg-green-100 text-green-800">{{ $message }}</div>
            @endif

            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-2 px-3 text-left">#</th>
                                <th class="py-2 px-3 text-left">{{ __('Awbno') }}</th>
                                <th class="py-2 px-3 text-left">{{ __('Flight') }}</th>
                                <th class="py-2 px-3 text-left">{{ __('Status') }}</th>
                                <th class="py-2 px-3 text-left">{{ __('Location') }}</th>
                                <th class="py-2 px-3 text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($trackedCargos as $trackedCargo)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-3 text-left whitespace-nowrap">{{ ++$i }}</td>
                                    <td class="py-3 px-3 text-left">{{ $trackedCargo->awbno }}</td>
                                    <td class="py-3 px-3 text-left">{{ $trackedCargo->flight }}</td>
                                    <td class="py-3 px-3 text-left">{{ $trackedCargo->status }}</td>
                                    <td class="py-3 px-3 text-left">{{ $trackedCargo->location }}</td>
                                    <td class="py-3 px-3 text-center">
                                        <div class="flex justify-center items-center">
                                            <a href="{{ route('tracked-cargos.show', $trackedCargo->id) }}" class="text-blue-500 hover:text-blue-700 mx-1" title="{{ __('Show') }}"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('tracked-cargos.edit', $trackedCargo->id) }}" class="text-green-500 hover:text-green-700 mx-1" title="{{ __('Edit') }}"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('tracked-cargos.destroy', $trackedCargo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 mx-1" title="{{ __('Delete') }}"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {!! $trackedCargos->withQueryString()->links() !!}
        </div>
    </div>
@endsection
