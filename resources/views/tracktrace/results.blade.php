@extends('layouts.app')
@section('content')
<center>
@if ($cargos->isEmpty() && $tcargos->isEmpty())
    <p>No results found.</p>
@else
    <h1>Now Tracking {{$search}}</h1>
    <table class="cargo">
        <thead>
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Weight</th>
                <th>Pieces</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $cargo)
            <tr>
                <td>{{$cargo->from}}</td>
                <td>{{$cargo->to}}</td>
                <td>{{$cargo->weight}}</td>
                <td>{{$cargo->pieces}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
    <table class="tcargo">
        <thead>
            <tr>
                <th>Flight</th>
                <th>Status</th>
                <th>Location</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tcargos as $tcargo)
            <tr>
                <td>{{$tcargo->flight}}</td>
                <td>{{$tcargo->status}}</td>
                <td>{{$tcargo->location}}</td>
                <td>{{$tcargo->created_at}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
</center>
@endif
@endsection