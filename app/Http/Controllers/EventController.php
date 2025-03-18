<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventImage;
use Inertia\Inertia;
use Exception;

class EventController extends Controller
{
    public function add_event_route(Request $request){
        if(is_null($request->title) ||      
        is_null($request->date) ||
        is_null($request->location) ||
        is_null($request->cover_image) ||
        is_null($request->time) ||
        is_null($request->reason)){
            return $this->get_empty_fields_response();
        }
     
        try{
            $event = new Event();
            $event->title = $request->title;
            $event->date = $request->date;
            $event->location = $request->location;
            $event->reason = $request->reason;
            $event->time = $request->time;
            $event->cover_image = $request->cover_image;
            $event->save();
            return response()->json(['message' => "Operation successfull", 'success' => true, 'status' => "Request successfull", 'id' => $event->id], 200);
        }
        catch(Exception $e){
            return $this->get_db_error_response($e->getMessage());
        }
    }

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
