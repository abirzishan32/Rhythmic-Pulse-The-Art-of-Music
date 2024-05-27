@extends('layouts.app')
@section('content')

  <div class="upcoming-events">
    <div>
      <h3>
        UPCOMING EVENTS
      </h3>
    </div>
  </div>

  


  <form class="add-events" action="/admin/upcoming-events" method="POST" enctype="multipart/form-data">
    @csrf
      <label>Event Name</label>
      <input type="text" name="name" placeholder="Enter Event Name" required>
      <label>Location</label>
      <input type="text" name="location" placeholder="Enter Location" required>
      <label>Date</label>
      <input type="date" name="event_date" required>
      <label>Time</label>
      <input type="time" name="event_time" required>
      <label>Description</label>
      <textarea name="description" placeholder="Write about the event..." required></textarea>
      <label>Upload Photo</label>
      <input type="file" name="image" required>
      <button type="submit">Create Event</button>
  </form>


  <div class="event-show">
    <h3>Event List</h3>
    <table class="table event-table">
      <thead>
        <tr>
          <th>Event Name</th>
          <th>Location</th>
          <th>Date</th>
          <th>Time</th>
          <th>Description</th>
          <th>Preview</th>
          <th>Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($events as $event)
        <tr>
          <td>{{ $event->name }}</td>
          <td>{{ $event->location }}</td>
          <td>{{ $event->event_date }}</td>
          <td>{{ $event->event_time }}</td>
          <td>{{ $event->description }}</td>
          
                    <td>
                    <img class="img-preview" src="{{ asset('storage/events/' . basename($event->image)) }}" />
                    </td>
                    <td>
                        <form action="{{ route('delete_event', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection




<!-- </body> -->