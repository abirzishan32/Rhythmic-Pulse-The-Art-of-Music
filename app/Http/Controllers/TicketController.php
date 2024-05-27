<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function storeTicket(Ticket $ticket, Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
        ]);

        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['contact'] = strip_tags($incomingFields['contact']);
        $incomingFields['number'] = strip_tags($incomingFields['number']);
        $incomingFields['event_name'] = strip_tags($incomingFields['event_name']);


        $existingTicket = Ticket::where('email', $incomingFields['email'])
                                ->where('event_name', $incomingFields['event_name'])
                                ->first();

        if ($existingTicket) {
            return back()->with('error', 'You have already purchased a ticket for this event.');
        }

        $ticket ->create($incomingFields);
        return view('ticket-booked');

    }

    public function index()
    {
        $ticket_list = Ticket::all();
        return view('/admin/events-tickets', compact('ticket_list'));
    }


}