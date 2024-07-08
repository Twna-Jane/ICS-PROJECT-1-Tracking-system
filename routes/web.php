<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TrackedCargoController;
use App\Http\Controllers\TrackTraceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

Route::resource('cargos', CargoController::class)->middleware(['auth','usertype']);
Route::resource('tracked-cargos', TrackedCargoController::class)->middleware(['auth','usertype']);

Route::get('/tracktrace', [TrackTraceController::class, 'index'])->name('tracktrace.index');
Route::get('/tracktrace/results', [TrackTraceController::class, 'search'])->name('tracktrace.search');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'adminindex'])->middleware(['auth','usertype']);
Route::get('carrier/dashboard',[HomeController::class,'carrierindex'])->middleware(['auth','usertype']);

Route::get('analytics', function(){
    return view('analytics');
});

