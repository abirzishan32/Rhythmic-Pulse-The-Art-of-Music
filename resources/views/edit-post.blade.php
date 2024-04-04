<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container--narrow {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-control-lg {
            font-size: 1.25rem;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .form-control-lg:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control-title {
            border: none;
            border-bottom: 2px solid #ccc;
            border-radius: 0;
        }

        .form-control-title:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .tall-textarea {
            min-height: 200px;
            border-radius: 10px;
            resize: vertical;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-muted {
            color: #6c757d;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>



<body>
<div class="container py-md-5 container--narrow">
    <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="post-title" class="text-muted mb-1"><small>Title</small></label>
            <input value="{{ old('title', $post->title)}}" required name="title" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Enter the title..." autocomplete="off" />
            @error('title')
            <div class="m-0 small alert alert-danger shadow-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="post-body" class="text-muted mb-1"><small>Description</small></label>
            <textarea required name="body" id="post-body" class="body-content tall-textarea form-control" placeholder="Write your post here...">{{ old('body', $post->body) }}</textarea>
            @error('body')
            <div class="m-0 small alert alert-danger shadow-sm">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Save Changes</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
