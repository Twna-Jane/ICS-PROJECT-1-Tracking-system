@extends('layouts.app')

@section('template_title')
    {{ $trackedCargo->name ?? __('Show') . " " . __('Tracked Cargo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tracked Cargo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tracked-cargos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Awbno:</strong>
                                    {{ $trackedCargo->awbno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Flight:</strong>
                                    {{ $trackedCargo->flight }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $trackedCargo->status }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Location:</strong>
                                    {{ $trackedCargo->location }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
