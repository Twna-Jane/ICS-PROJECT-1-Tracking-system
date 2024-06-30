<?php

namespace App\Http\Controllers;

use App\Models\TrackedCargo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TrackedCargoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TrackedCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $trackedCargos = TrackedCargo::paginate();

        return view('tracked-cargo.index', compact('trackedCargos'))
            ->with('i', ($request->input('page', 1) - 1) * $trackedCargos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $trackedCargo = new TrackedCargo();

        return view('tracked-cargo.create', compact('trackedCargo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrackedCargoRequest $request): RedirectResponse
    {
        TrackedCargo::create($request->validated());

        return Redirect::route('tracked-cargos.index')
            ->with('success', 'TrackedCargo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $trackedCargo = TrackedCargo::find($id);

        return view('tracked-cargo.show', compact('trackedCargo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $trackedCargo = TrackedCargo::find($id);

        return view('tracked-cargo.edit', compact('trackedCargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TrackedCargoRequest $request, TrackedCargo $trackedCargo): RedirectResponse
    {
        $trackedCargo->update($request->validated());

        return Redirect::route('tracked-cargos.index')
            ->with('success', 'TrackedCargo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TrackedCargo::find($id)->delete();

        return Redirect::route('tracked-cargos.index')
            ->with('success', 'TrackedCargo deleted successfully');
    }
}
