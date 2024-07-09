@extends('layouts.app')

@section('template_title')
    Cargos
@endsection

@section('content')
    <div class="container mx-auto py-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="flex justify-between items-center bg-gray-200 px-4 py-3">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Cargos') }}</h2>
                <a href="{{ route('cargos.create') }}" class="btn btn-primary btn-sm">{{ __('Create New') }}</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
            @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Awbno</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Weight</th>
                                        <th>Pieces</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cargos as $cargo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cargo->awbno }}</td>
                                            <td>{{ $cargo->from }}</td>
                                            <td>{{ $cargo->to }}</td>
                                            <td>{{ $cargo->weight }}</td>
                                            <td>{{ $cargo->pieces }}</td>
                                            <td>
                                                <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('cargos.show', $cargo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cargos.edit', $cargo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('Are you sure to delete?')) { this.closest('form').submit(); }"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cargos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
