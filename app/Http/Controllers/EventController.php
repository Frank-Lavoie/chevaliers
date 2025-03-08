<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventImage;
use Inertia\Inertia;
use Exception;

class EventController extends Controller
{
    public function create_event($cover_image, $title, $reason, $location, $date, $time, $images){
        try{
            $event = new Event();
            $event->cover_image = $cover_image;
            $event->title = $title;
            $event->reason = $reason;
            $event->location = $location;
            $event->date = $date;
            $event->time = $time;
            $event->save();

            for($i = 0; $i < count($images); $i++){
                $event->images()->createMany([['image_path' => $images[$i]]]);
            }

        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function get_event_details_route($id){
        $event = Event::with('images')->find($id);
        return Inertia::render('event-details', [
            'event' => $event
        ]);
    }

    public function get_events_route(){
        $events = Event::get();
        return Inertia::render('events', [
            'events' => $events
        ]);
    }
}
