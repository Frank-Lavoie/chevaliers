<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return Inertia::render('home');
})->name('home');

Route::get('evenements', 
    [EventController::class, 'get_events_route'])->name('events');

Route::get('evenement/{id}',
    [EventController::class, 'get_event_details_route'])->name('event-details');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
