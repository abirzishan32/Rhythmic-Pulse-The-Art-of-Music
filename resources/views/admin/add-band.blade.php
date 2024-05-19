

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Band</title>
</head>
<body>
    <h1>Add a New Band</h1>
    <form  action="/admin/bands" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Band Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
        </div>
        <div>
            <label for="website">Website:</label>
            <input type="url" id="website" name="website">
        </div>
        <div>
            <label for="albums">Albums (comma-separated):</label>
            <input type="text" id="albums" name="albums" placeholder="Album 1, Album 2, Album 3">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
