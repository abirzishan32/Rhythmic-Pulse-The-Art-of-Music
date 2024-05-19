<!DOCTYPE HTML>
<html>
<head>
<title>Band Information</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container mt-5">
    @foreach ($bands as $band)
    <div class="band-detail">
        <h2>{{ $band->name }}</h2>
        <p>Genre: {{ $band->genre }}</p>
        <p>Country: {{ $band->country }}</p>
        <p>Founding Year: {{ $band->founding_year }}</p>
        <p>Description: {{ $band->description }}</p>
        <h3>Albums:</h3>
        <ul>
            @forelse ($band->albums as $album)
                <li>{{ $album->title }} - Released on: {{ $album->release_date }}</li>
            @empty
                <li>No albums found.</li>
            @endforelse
        </ul>
    </div>
    @endforeach
</div>


<footer class="text-center mt-4">
    <p>All right reserved by Rhythmic Pulse - The Art of Music</p>
</footer>
</body>
</html>
