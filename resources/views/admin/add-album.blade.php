




@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Album</h1>
    <form method="POST" action="/admin/add-album"">
        @csrf
        <div class="form-group">
            <label for="band_id">Select Band</label>
            <select class="form-control" id="band_id" name="band_id" required>
                @foreach (App\Models\Band::all() as $band)
                    <option value="{{ $band->id }}">{{ $band->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Album Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a class="go-to-band" href="{{url('/bands')}}">Go To Band</a>
</div>
@endsection
</body>