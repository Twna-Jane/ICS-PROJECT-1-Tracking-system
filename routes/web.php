<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TrackedCargoController;
use App\Http\Controllers\TrackTraceController;

Route::get('/', [TrackTraceController::class, 'search'])->name('tracktrace.search');


