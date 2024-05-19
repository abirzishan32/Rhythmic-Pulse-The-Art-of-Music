<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band and Album List</title>
</head>
<body>
    <h1>Band and Album List</h1>
    
    <ul>
        @foreach($bands as $band)
            <li>
                <h2>{{ $band->name }}</h2>
                <p>{{ $band->description }}</p>
                <h3>Albums</h3>
                <ul>
                    @foreach($band->albums as $album)
                        <li>
                            <h4>{{ $album->title }}</h4>
                            <p>{{ $album->description }}</p>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
       
    </ul>
</body>
</html>
