@extends('layouts.app')

@section('content')
<div class="event-ticket">
    <div>
        <h3>EVENT TICKETS</h3>
    </div>
</div>

@foreach ($ticket_list->groupBy('event_name') as $event_name => $tickets)
<div class="event-show">
    <h4>{{ $event_name }}</h4>
    <table class="table event-table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Number of Seats</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->email }}</td>
                <td>{{ $ticket->contact }}</td>
                <td>{{ $ticket->number }}</td>
                <td>
                    <a href="mailto:{{ $ticket->email }}" target="_blank">
                        <button class="btn btn-primary">Email</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endforeach

@endsection
