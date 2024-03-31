<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $events = Event::all();

        return view('events', [
            'events' => $events,
            'team_events' => null,
            'individual_events' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        foreach ($request->all() as $event) {
            $event = Event::create($event);
            $event->save();
        }
        return response()->json(Event::all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $event = Event::findOrFail($id);
        return view('events-detail', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event) {
        //
    }

    public function team() {
        $team_events = Event::where('type', 'team')->get();

        return view('events', [
            'events' => null,
            'team_events' => $team_events,
            'individual_events' => null
        ]);
    }

    public function individual() {
        $individual_events = Event::where('type', 'individual')->get();

        return view('events', [
            'events' => null,
            'team_events' => null,
            'individual_events' => $individual_events
        ]);
    }
}
