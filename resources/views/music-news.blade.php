<!DOCTYPE html>
<html lang="en">

<head>

</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music News</title>
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</html>
<body>
    <header>
        <div class="container">
            <h1>Music News</h1>
        </div>
    </header>
    <section class="news-container">
        @foreach ($newsItems as $news)
        <div class="news-card">
            <img src="" alt="news-image" class="news-image">
            <div class="news-info">
                <h3 class="news-title">{{ $news->title }}</h3>
                <p class="news-summary">{{ Str::limit($news->summary, 100) }}</p>
                <a href="{{ route('news.show', $news->id) }}" class="read-more-btn">Read More</a>
            </div>
        </div>
        @endforeach
    </section>

</body>
</html>

