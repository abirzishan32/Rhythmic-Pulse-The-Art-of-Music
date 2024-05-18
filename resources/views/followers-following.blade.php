<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="list-group">
    @if(isset($following) && $following->isNotEmpty())
        @foreach($following as $follow)
            <a href="/profile/{{$follow->userBeingFollowed->username}}" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" src="{{$follow->userBeingFollowed->avatar}}" />
                {{$follow->userBeingFollowed->username}}
            </a>
        @endforeach
    @else
        <p>No following to display.</p>
    @endif
</div>





</body>
</html>
