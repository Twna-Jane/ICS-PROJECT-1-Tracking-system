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
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Awbno:</strong>
                                    {{ $cargo->awbno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>From:</strong>
                                    {{ $cargo->from }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>To:</strong>
                                    {{ $cargo->to }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Weight:</strong>
                                    {{ $cargo->weight }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pieces:</strong>
                                    {{ $cargo->pieces }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
