@extends('layouts.app')

@section('template_title')
    {{ $cargo->name ?? __('Show') . " " . __('Cargo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cargo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cargos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 30%;">Awbno:</th>
                                        <td>{{ $cargo->awbno }}</td>
                                    </tr>
                                    <tr>
                                        <th>From:</th>
                                        <td>{{ $cargo->from }}</td>
                                    </tr>
                                    <tr>
                                        <th>To:</th>
                                        <td>{{ $cargo->to }}</td>
                                    </tr>
                                    <tr>
                                        <th>Weight:</th>
                                        <td>{{ $cargo->weight }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pieces:</th>
                                        <td>{{ $cargo->pieces }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
