<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{


    public function store(Event $event, Request $request)
    {

        $incomingFields = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['location'] = strip_tags($incomingFields['location']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);

        $imagePath = $request->file('image')->store('public/events');
        $incomingFields['image'] = $imagePath;
        $event->create($incomingFields);
        return redirect('/admin/upcoming-events')->with('success', 'Event created successfully!');
    }

    public function index1()
{
    $events = Event::all(); 
    return view('/admin/upcoming-events', compact('events'));
}

public function index2()
{
    $events = Event::all(); 
    return view('/home', compact('events')); 
}

}