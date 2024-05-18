<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container--narrow {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="file"] {
            border: 2px solid #007bff;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        input[type="file"]:focus {
            outline: none;
            border-color: #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }


        @media (max-width: 576px) {
            .container--narrow {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            form {
                max-width: 100%;
            }

            .form-group {
                margin-bottom: 15px;
            }

            input[type="file"] {
                padding: 8px;
            }

            .btn-primary {
                padding: 8px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container--narrow mt-5">
        <h1>Edit Profile</h1>



        <form action="/edit-profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4">
                <label for="avatar" class="d-block">Avatar</label>
                <input type="file" name="avatar" id="avatar" class="form-control-file" required>
                @error('avatar')
                <p class="alert small alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save</button>
        </form>


        
    </div>
</body>
</html>
