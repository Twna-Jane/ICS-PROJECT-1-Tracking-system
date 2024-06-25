<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\TrackedCargo;
use Illuminate\Http\Request;

class TrackTraceController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        // Search in Cargo
        $cargos = Cargo::where('awbno', 'like', '%'.$search.'%')->get();

        // Search in TrackedCargo
        $tcargos = TrackedCargo::where('awbno', 'like', '%'.$search.'%')->get();

        return view('index', [
            'cargos' => $cargos,
            'tcargos' => $tcargos,
            'search' => $search,
        ]);
    }
}
