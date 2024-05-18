<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4; 
    margin: 0;
    padding: 0;
    height: 100%;
}

h1{
    text-align: center;
    margin-top: 20px;

}

.btn{
    
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;


}

.list-group {
    width: 100%;
    max-width: 600px; 
    margin: 30px auto;
    background-color: #fff; 
    border-radius: 8px; 
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    padding: 20px;
}

.list-group-item {
    display: flex;
    align-items: center; 
    padding: 10px; 
    border-bottom: 1px solid #ccc;
    text-decoration: none; 
    color: #333;
}

.list-group-item:last-child {
    border-bottom: none;
}

.avatar-tiny {
    width: 50px;
    height: 50px; 
    border-radius: 50%; 
    margin-right: 15px; 
    object-fit: cover; 
}

.list-group-item:hover {
    background-color: #f8f8f8; 
    transition: background-color 0.3s;
}

    </style>
</head>

<body>
<h1> These users are following you: </h1>

    <div class="list-group">
        @if (isset($following) && $following->isNotEmpty())
        <div class="list-group">
            <div class="list-group">
                @foreach($followers as $follow)
                <a href="/profile/{{$follow->userDoingTheFollowing->username}}" class="list-group-item list-group-item-action">
                    <img class="avatar-tiny" src="{{$follow->userDoingTheFollowing->avatar}}" />
                    {{$follow->userDoingTheFollowing->username}}
                </a>
                @endforeach
            </div>
        </div>
        @else
        <p>No followers to display.</p>
        @endif
        <a href="/home"> <button class="btn"> Go To Home </button></a>
<a href="/following/{{$sharedData['username']}}"> <button class="btn"> Following </button></a>
    </div>
</body>