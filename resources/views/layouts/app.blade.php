<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Management</title>
    <link href="{{ asset('css/admin-panel.css') }}" rel="stylesheet">
</head>
<body>
<div class="horizontal-menu">
    <nav class="bottom-navbar">
        <div class="container">
            <div class="hamburger-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a href="/admin/upcoming-events" class="nav-link">
                        <span class="menu-title">Upcoming Events</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/events-tickets" class="nav-link">
                        <span class="menu-title">Events Ticket</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/add-band" class="nav-link">
                        <span class="menu-title"> Bands</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/add-album" class="nav-link">
                        <span class="menu-title"> Albums</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/merch-product" class="nav-link">
                        <span class="menu-title">Merchandise Product</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/merch-order" class="nav-link">
                        <span class="menu-title">Merchandise Order</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>

<script>
function toggleMenu() {
    const nav = document.querySelector('.page-navigation');
    nav.classList.toggle('nav-open');
}
</script>

</body>
</html>
