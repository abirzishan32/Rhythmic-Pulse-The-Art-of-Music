<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Web API Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        /* Basic styling to maintain a clean and modern look */
body, html {
    font-family: 'Arial', sans-serif;
    background: #f8f9fa;
    color: #333;
}

.container {
    padding: 20px;
    background: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    border-radius: 5px;
    margin-top: 20px;
}

/* Styling for form elements */
.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    color: #555;
}

.form-control {
    border: none;
    border-bottom: 2px solid #ddd;
    border-radius: 0;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-bottom-color: #007bff;
    box-shadow: none;
}


button#btn_submit {
    background-color: #28a745;
    border: none;
    transition: background-color 0.3s, transform 0.2s;
}

button#btn_submit:hover {
    background-color: #218838;
    transform: translateY(-2px);
}


.list-group-item {
    transition: all 0.3s;
    cursor: pointer;
}

.list-group-item:hover {
    background-color: #007bff;
    color: white;
}


#song-detail {
    transition: transform 0.3s, box-shadow 0.3s;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}



/* Responsive adjustments */
@media (max-width: 768px) {
    .col-sm-6, .offset-md-1.col-sm-4 {
        padding: 0 15px;
    }
}

/* Animation for dropdowns */
select.form-control {
    appearance: none;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2212%22%20height%3D%2212%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpolygon%20points%3D%226%2C8%206%2C4%2010%2C6%20%22%20fill%3D%22%23aaa%22/%3E%3C/svg%3E');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px 12px;
}

/* Enhancing the visual feedback on user interaction */
select.form-control:focus {
    background-color: #eff3f8;
}

/* Adjusting the hidden input - it should not alter layout */
input[type="hidden"] {
    display: none;
}

.track-image {
    width: 100%; /* Make the image responsive */
    transition: transform 0.3s ease-in-out; /* Smooth transformation */
}

.track-image:hover {
    transform: scale(1.1); /* Increase size on hover */
}


    </style>

</head>

<body>

    <div class="container">
        <form action="">
            <input type="hidden" id='hidden_token'>
            <div class="col-sm-6 form-group row mt-4 px-0">
                <label for="Genre" class="form-label col-sm-2">Genre:</label>
                <select name="" id="select_genre" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>
                </select>
            </div>
            <div class="col-sm-6 form-group row px-0">
                <label for="Genre" class="form-label col-sm-2">Playlists:</label>
                <select name="" id="select_playlist" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>
                </select>
            </div>
            <div class="col-sm-6 row form-group px-0">
                <button type="submit" id="btn_submit" class="btn btn-success col-sm-12">Search</button>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-6 px-0">
                <div class="list-group song-list">

                </div>
            </div>
            <div class="offset-md-1 col-sm-4" id="song-detail">
            </div>
        </div>

        <a class="btn" href="/home"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Home</button> </a>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/spotify.js') }}"></script>
</body>

</html>