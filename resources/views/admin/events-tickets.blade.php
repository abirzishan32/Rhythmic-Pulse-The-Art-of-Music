@extends('layouts.app')

@section('content')


        <div class="event-ticket">
    <div>
      <h3>
        EVENT TICKETS
      </h3>
    </div>
  </div>

        <div class="event-show">
            <table class="table event-table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Number of Seats</th>
                        <th>Event Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticket_list as $ticket)
                    <tr>
                        <td>{{ $ticket->email }}</td>
                        <td>{{ $ticket->contact }}</td>
                        <td>{{ $ticket->number}}</td>
                        <td>{{ $ticket->event_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection