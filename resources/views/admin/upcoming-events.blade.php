<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Latest Album</title>
  <link href="{{ asset('css/admin-panel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">	
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">	
    <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">	
</head>

<body>
<div class="upcoming-events">
    <div>
        <h3 >
          UPCOMING EVENTS
        </h3>
    </div>  
  </div>

  <div class="container-scroller">
    <div class="horizontal-menu">

      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
            <li class="nav-item">
                  <a href="/admin/upcoming-events" class="nav-link">
                    <span class="menu-title">Upcoming Events</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-only">
                  <span class="menu-title">Bands</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <span class="menu-title">Course</span>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Guitar</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Drums</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Piano and Keyboard</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="/admin/latest-album" class="nav-link">
                    <span class="menu-title">Latest Album</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="/admin/merch-product" class="nav-link">
                    <span class="menu-title">Merchandise Product</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <span class="menu-title">Merchandise Order</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/tables/basic-table.html" class="nav-link">
                    <span class="menu-title">Contact</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/icons/mdi.html" class="nav-link">
                    <span class="menu-title">Icons</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="docs/documentation.html" class="nav-link">
                    <span class="menu-title">Documentation</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>


  <form class="add-events" action="/admin/upcoming-events" method="POST" enctype="multipart/form-data">
    @csrf
    <h3> Add Events </h1>
    <label>Event Name</label>
    <input type="text" name="name" placeholder="Enter Event Name" required>
    <label>Location</label>
    <input type="text" name="location" placeholder="Enter Location" required>
    <label>Date</label>
    <input type="date" name="event_date" required>
    <label>Time</label>
    <input type="time" name="event_time" required>
    <label>Description</label>
    <textarea name="description" placeholder="Write about the event..." required></textarea>
    <label>Upload Photo</label>
    <input type="file" name="image" required>
    <button type="submit">Create Event</button>
</form>

  
<div class="event-show">
<h3> Event List </h3>
<div class="show-events">
    @foreach($events as $event)
        <div class="event">
            <h3> Event Name : {{ $event->name }}</h3>
            <p> Location : {{ $event->location }}</p>
            <p> Date : {{ $event->event_date }}</p>
            <p> Time : {{ $event->event_time }}</p>
            <p> Description : {{ $event->description }}</p>
        </div>
    @endforeach
</div> 
  </div>



</body>


