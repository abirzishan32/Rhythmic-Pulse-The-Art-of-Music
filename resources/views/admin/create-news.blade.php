<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Merchandise Upload</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">
    </head>

    <body>
    <div class="upcoming-events">
        <div>
            <h3>
                NEWS
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
                            <a href="/admin/events-tickets" class="nav-link">
                                <span class="menu-title">Events Ticket</span>
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

    <div class="add-merch">
        <h3>Add News</h3>
    </div>

    <form action="/admin/create-news" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">News Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="summary">News Summary</label>
            <textarea class="form-control" id="summary" name="summary" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">Upload Image</label>
            <input type="file" class="form-control-file" id="image_url" name="image_url" required>
        </div>
        <div class="form-group">
            <label for="full_article_link">Full Article Link (optional)</label>
            <input type="text" class="form-control" id="full_article_link" name="full_article_link">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>