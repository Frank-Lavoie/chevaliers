<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConfigController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/evenement',
[EventController::class, 'add_event_route'], function(){})->name('add_event_route');

Route::post('/config',
[ConfigController::class, 'add_config_route'], function(){})->name('add_config_route');