@extends('layouts.app')
@section('content')
    <center>
    <h1> Track & Trace </h1>
    <form id="searchForm" action="{{ route('tracktrace.search') }}" method="GET">   
        @csrf
        <input type="text" name="search" placeholder="Enter AWB Number">
        <button type="submit">Submit</button>
    </form>
    </center>
@endsection