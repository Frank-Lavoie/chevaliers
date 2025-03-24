<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RoomReservationController;

Route::get('/', function () {
    return Inertia::render('home');
})->name('home');

Route::get('a-propos', function () {
    return Inertia::render('about');
})->name('about');

Route::get('salle-chevaliers',
    [RoomReservationController::class, 'room_reservation_page'])->name('room_reservation_page');

Route::get('evenements', 
    [EventController::class, 'get_events_route'])->name('events');

Route::get('evenement/{id}',
    [EventController::class, 'get_event_details_route'])->name('event-details');



// Admin
Route::get('admin/ajouter-evenements', function () {
    return Inertia::render('add-event');
})->name('add-event-page');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
