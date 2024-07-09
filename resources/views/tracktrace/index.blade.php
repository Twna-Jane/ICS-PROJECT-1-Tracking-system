@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen bg-blue-100"> <!-- Added bg-blue-100 for pale blue background -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold mb-6">Track & Trace</h1>
            <img src="{{ asset('tracking.jpg') }}" alt="Tracking Image" class="mx-auto mb-6" style="max-width: 200px;">
            <form id="searchForm" action="{{ route('tracktrace.search') }}" method="GET" class="mb-6">
                @csrf
                <input type="text" name="search" placeholder="Enter AWB Number" class="border border-gray-300 px-4 py-2 rounded-md mr-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection

