<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('events', ['events' => Event::all()]);
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
}
