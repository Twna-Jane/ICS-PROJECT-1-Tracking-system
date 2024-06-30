<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TrackedCargoController;
use App\Http\Controllers\TrackTraceController;

Route::redirect('/','home');
Route::resource('cargos', CargoController::class);
Route::resource('tracked-cargos', TrackedCargoController::class);

Route::get('/tracktrace', [TrackTraceController::class, 'index'])->middleware('auth')->name('tracktrace.index');
Route::get('/tracktrace/results', [TrackTraceController::class, 'search'])->middleware('auth')->name('tracktrace.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
