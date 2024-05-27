<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .avatar-small {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .avatar-tiny {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-nav {
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        .profile-nav .nav-item {
            margin-right: 20px;
            font-size: 18px;
        }

        .profile-nav .nav-link {
            color: #007bff;
            font-weight: 600;
        }

        .list-group-item {
            margin-top: 12px;
            border-radius: 12px;
            margin-bottom: 15px;
            background: whitesmoke;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .list-group-item img {
            max-width: none;
            height: auto;
            border-radius: 12px;
        }

        .post-title {
            font-size: 22px;
            color: #444;
            margin-bottom: 5px;
        }

        .post-date {
            font-size: 15px;
            color: #666;
        }

        .btn-profile {
            background-color: #007bff;
            color: navajowhite;
            font-size: 15px;
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: bold;
            text-transform: uppercase;
            margin-left: auto;
        }

        .btn-profile:hover {
            background-color: #ffff;
        }

        .btn-follow,
        .btn-unfollow {
            border: none;
            margin-bottom: 10px;
            border-radius: 12px;
            font-weight: bold;
            padding: 6px 12px;
            font-size: 16px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-follow {
            background-color: #28a745;
            color: white;
        }

        .btn-follow:hover {
            background-color: #218838;
        }

        .btn-unfollow {
            background-color: #dc3545;
            color: white;
        }

        .btn-unfollow:hover {
            background-color: #c82333;
        }

        .btn {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container py-md-5">
        <h2 class="mb-4">
            <img class="avatar-small" src="{{$sharedData['avatar']}}" /> {{$sharedData['username']}}
            @auth
            @if(!$sharedData['currentlyFollowing'] AND auth()->user()->username != $sharedData['username'])
            <form class="ml-2 d-inline" action="/create-follow/{{$sharedData['username']}}" method="POST">
                @csrf
                <button class="btn btn-primary btn-sm">Follow <i class="fas fa-user-plus"></i></button>
            </form>
            @endif

            @if($sharedData['currentlyFollowing'])
            <form class="ml-2 d-inline" action="/remove-follow/{{$sharedData['username']}}" method="POST">
                @csrf
                <button class="btn btn-danger btn-sm">Stop Following <i class="fas fa-user-times"></i></button>
            </form>
            @endif

            @if(auth()->user()->username == $sharedData['username'])
            <a href="/edit-profile" class="btn btn-secondary btn-sm">Edit Profile</a>
            @endif
            @endauth
            <a href="/followers/{{$sharedData['username']}}"> <button class="btn"> Followers </button></a>
            <a href="/following/{{$sharedData['username']}}"> <button class="btn"> Followings </button></a>
        </h2>

        <div class="profile-nav nav nav-tabs pt-2 mb-4">
            <a href="#" class="profile-nav-link nav-item nav-link active">Posts: {{$sharedData['postCount']}}</a>
        </div>

        <a href="/create-post"> <button class="btn"> Create Post </button></a>

        @foreach($posts as $post)
        <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex align-items-center">
                <img class="avatar-tiny" src="{{$sharedData['avatar']}}" alt="Avatar">
                <div class="flex-grow-1 ml-3">
                    <h5 class="post-title mb-1">{{$post->title}}</h5>
                    <p class="post-date mb-0"><small>{{$post->created_at->format('M j, Y')}}</small></p>
                </div>
            </div>
        </a>
        @endforeach

        <a href="/home"> <button class="btn"> Go To Home </button></a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>