@extends('layouts.app')

@section('content')



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
              <a href="/admin/events-tickets" class="nav-link">
                <span class="menu-title">Events Ticket</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
            <a href="/admin/add-band" class="nav-link">
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
<div class="container">

<div class="add-band">
        <div>
            <h3>
                ADD BAND
            </h3>
        </div>
    </div>
    <form method="POST" action="/admin/add-band">
        @csrf
        <div class="form-group">
            <label>Band Name</label>
        <input class="input-val" type="text" name="name" placeholder="Enter Band Name">
    
        <label>Genre</label>
        <input class="input-val" type="text" name="genre" placeholder="Enter Genre">

        <label>Country</label>
        <input class="input-val" type="text" name="country" placeholder="Enter Country">


        <label>Founding Year</label>
        <input class="input-val" type="number" name="founding_year" placeholder="Enter Founding Year"><br>

        <label>Description</label>
        <input class="input-val" type="text" name="description" placeholder="Enter Description">

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    

</div>
@endsection
