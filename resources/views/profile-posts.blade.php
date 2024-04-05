<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }


        .avatar-small {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .avatar-tiny {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-nav {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .profile-nav .nav-item {
            margin-right: 15px;
            font-size: 18px;
        }

        .profile-nav .nav-link {
            color: #007bff;
        }


        .list-group-item {
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .list-group-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 10px rgba(0,0,0,0.2);
        }

        .list-group-item img {
            max-width: 50px;
            height: auto;
            border-radius: 10px;
        }

        .post-title {
            font-size: 20px;
            color: #333;
        }

        .post-date {
            font-size: 14px;
            color: #888;
        }
        
     


    

        .btn{
            background-color: #007bff;
            border: none;
            margin-bottom: 8px;
            padding: 8px 12px;
            border-radius: 10px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            color: white;            
        }

        .btn:hover{
            background-color: #0056b3;
            color: white;
        }

    </style>
</head>
<body>
<div class="container py-md-5">
    <h2 class="mb-4">
        <img class="avatar-small" src="{{$avatar}}" alt="Avatar" /> {{$username}}
        <form class="ml-2 d-inline" action="#" method="POST">
            <button class="btn">Follow <i class="fas fa-user-plus"></i></button>
            @if (auth()->user()->username == $username)
                <a href="/edit-profile" class="btn">Your Profile</a>

            @endif
        </form>
    </h2>

    <div class="profile-nav nav nav-tabs pt-2 mb-4">
        <a href="#" class="profile-nav-link nav-item nav-link active">Posts: {{$postCount}}</a>
        <a href="#" class="profile-nav-link nav-item nav-link">Followers: 3</a>
        <a href="#" class="profile-nav-link nav-item nav-link">Following: 2</a>
    </div>

   
    

    <a href="/create-post" > <button class="btn" >  Create Post </button></a>

        @foreach($posts as $post)
            <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
                <div class="d-flex align-items-center">
                    <img class="avatar-tiny" src="{{$avatar}}" alt="Avatar">
                    <div class="flex-grow-1 ml-3">
                        <h5 class="post-title mb-1">{{$post->title}}</h5>
                        <p class="post-date mb-0"><small>{{$post->created_at->format('M j, Y')}}</small></p>
                    </div>
                </div>
            </a>
        @endforeach

        <a href="/home" > <button class="btn" >  Go To Home </button></a>
        
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
