<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use Inertia\Inertia;

class RoomReservationController extends Controller
{
    public function room_reservation_page(){
        $phones = Config::all();
        return Inertia::render('room-reservation', [
            'phones' => $phones
        ]);
    }
}
