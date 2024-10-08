<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song Lyrics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    <link href="{{ asset('css/lyrics.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Search lyric</h1>
            <form id="form"  autocomplete="off">
                <input type="text" id="search"  placeholder="Enter artist name or song title...">
                <button>Search</button>
            </form>
            
            
        </div>
    </header>
    <section id="video"></section>
    <section class="result" id="result">
        <h1>Results will be displayed here... </h1>
        
    </section>

<script src="https://apis.google.com/js/api.js"></script>  
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script> 
<script src="js/lyrics.js"></script>
</body>
</html>