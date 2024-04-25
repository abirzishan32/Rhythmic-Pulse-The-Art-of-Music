<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin Panel</title>
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

  <div class="admin-panel">
    <div>
      <h3>
        ADMIN PANEL
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

    <div>

      <video autoplay muted loop id="video">
        <source src="{{ asset('Media/admin-welcome.mp4') }}" type="video/mp4">
      </video>

    </div>


  </div>
  <!-- container-scroller -->

</body>

</html>