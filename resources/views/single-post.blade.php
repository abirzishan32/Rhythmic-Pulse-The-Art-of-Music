<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Show</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/single-post.css">
    <style>
        body {
            background-color: lavenderblush;
            font-family: 'Arial', sans-serif;
        }

        .container--narrow {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .post-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
        }

        .post-title {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .post-meta {
            font-size: 14px;
            color: #888;
        }

        .post-meta a {
            color: #007bff;
            text-decoration: none;
        }

        .body-content {
            line-height: 1.6;
        }

        .delete-post-button {
            border: none;
            background: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 18px;
        }

        .delete-post-button:hover {
            text-decoration: underline;
        }

        .delete-post-button:focus {
            outline: none;
        }
    </style>
</head>
<body>
<div class="container py-md-5 container--narrow">
    <div class="post-card mx-auto">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="post-title">{{$post->title}}</h2>
            @can('update', $post)
            <span class="pt-2">
              <a href="/post/{{$post->id}}/edit" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i> Edit </a>
              <form class="delete-post-form d-inline" action="/post/{{$post->id}}" method="POST">
              @csrf
              @method('DELETE')
                <button class="delete-post-button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i> Delete</button>
              </form>
            </span>
            @endcan
        </div>

        <p class="post-meta mb-4">
            <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" alt="Avatar"></a>
            Posted by <a href="#" class="text-dark">{{$post->user->username}}</a> on {{$post->created_at->format('F j, Y')}}
        </p>

        <div class="body-content">
            {!! $post->body !!}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
