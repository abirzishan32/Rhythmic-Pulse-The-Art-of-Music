<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Merchandise Upload</title>
    <link href="{{ asset('css/admin-panel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">
    <style>
        .body, .html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .add-merch{
            text-align: center;
            margin: 0 auto;
        }

        .input-val {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .add-product {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        .add-product label {
            display: block;
            margin-bottom: 5px;
        }

        .add-product input[type="text"],
        .add-product input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .add-product input[type="file"] {
            margin-bottom: 10px;
        }

        .add-product button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-product button:hover {
            background-color: #555;
        }

    </style>
</head>

<body>
    <div class="upcoming-events">
        <div>
            <h3>
                MERCH PRODUCTS
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

    <div class="add-merch">
        <h3>Add Merchandise Product</h3>
    </div>

    <form action="/admin/merch-product" class="add-product" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Band Name</label>
        <input class="input-val" type="text" name="band_name" placeholder="Enter Band Name">


       
        <label>Type</label>
        <select class="input-val" name="type">
            <option value="T-shirt">T-Shirt</option>
            <option value="Shorts">Shorts</option>
            <option value="Hoodie">Hoodie</option>
            <option value="Wrist band">Wrist Band</option>
            <option value="Cap">Cap</option>
            <option value="Bag">Bag</option>
            <option value="Poster">Poster</option>
            <option value="Mug">Mug</option>
            <option value="Key Ring">Key Ring</option>
        </select>



        <label>Price</label>
        <input class="input-val" type="number" name="price" placeholder="Enter Price">



        <label>Upload Photo</label>
        <input class="input-val" type="file" name="image" required>


        
        <label>Recommended Item</label>
        <input type="radio" name="recommended" value="yes" id="rec"> Yes
        <input type="radio" name="recommended" value="no" id="not-rec"> No



        <button type="submit">Submit</button>
    </form>

</body>