<?php

namespace App\Http\Controllers;

use App\Models\TrackedCargo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrackedCargoRequest;
use App\Http\Requests\UpdateTrackedCargoRequest;


class TrackedCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackedCargoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TrackedCargo $trackedCargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrackedCargo $trackedCargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackedCargoRequest $request, TrackedCargo $trackedCargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrackedCargo $trackedCargo)
    {
        //
    }

    public function search()
    {
        $search = $_GET['query'];
        $tcargos = TrackedCargo::where('awbno', 'like', "%$search%")->get();
    
        return view('search',compact('tcargos'));
    }

}
