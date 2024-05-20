<!DOCTYPE HTML>
<html>
<head>
<title>Band Information</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/bands.css') }}" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    @foreach ($bands as $band)
    <div class="band-card">
        <div class="band-header">
            <h2>{{ $band->name }}</h2>
            <p class="band-genre">{{ $band->genre }}</p>
        </div>
        <div class="band-info">
            <p><strong>Country:</strong> {{ $band->country }}</p>
            <p><strong>Founding Year:</strong> {{ $band->founding_year }}</p>
            <p>{{ $band->description }}</p>
        </div>
        <div class="band-albums">
            <h3>Albums:</h3>
            <ul>
                @forelse ($band->albums as $album)
                    <li>{{ $album->title }} - Released on: {{ $album->release_date }}</li>
                @empty
                    <li>No albums found.</li>
                @endforelse
            </ul>
        </div>
    </div>
    @endforeach
</div>

<footer class="text-center mt-4">
    <p>All right reserved by Rhythmic Pulse - The Art of Music</p>
</footer>
</body>
</html>
