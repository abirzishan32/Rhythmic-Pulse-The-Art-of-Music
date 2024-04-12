<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

.menu li {
    margin-bottom: 10px;
}

.menu a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 10px;
}

.menu a:hover {
    background-color: #555;
}

.clock {
    padding: 10px;
    color: #fff;
    font-size: 18px;
}

.current-user {
    margin-top: 20px;
}

.current-user ul {
    list-style: none;
    padding: 0;
}

.current-user li {
    margin-bottom: 5px;
}
.content {
    margin-left: 250px; /* Adjust this value to match the width of the sidebar */
    padding: 20px;
}
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <div class="menu">
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/items">Items</a></li>
            <li><a href="/customers">Customers</a></li>
            <li><a href="/sells">Sells</a></li>
            <li><a href="/rentals">Rentals</a></li>
            <li><a href="/update-due">Update Due</a></li>
            <li><a href="/accounts">Accounts</a></li>
            @if (auth()->user()->role === 'Admin')
                <li><a href="/admin">Administrative</a></li>
            @endif
            <li><a href="/logout">Logout</a></li>
        </ul>
        </div>
        <div><h3>Current time:</h3></div>
        <div id="clock" class="clock"></div>
        <div class="current-user">
            <ul>
                <li>Logged in as: {{ auth()->user()->name }}</li>
                <li>Role: {{ auth()->user()->role }}</li>
            </ul>
        </div>
    </div>
    
    <div class="content">
    <h2>Dashboard</h2>
    <p>Welcome to the dashboard</p>
    
    <div>
 
    </div>
</div>

    <script src="js/clock.js"></script>
</body>
</html>