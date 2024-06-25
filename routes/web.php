<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TrackedCargoController;

Route::get('/', [CargoController::class, 'index'])->name('cargo.index');
Route::get('/search', [CargoController::class, 'search'])->name('cargo.search');







