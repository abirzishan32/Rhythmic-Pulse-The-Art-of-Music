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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
        }



        .admin-panel,
        .upcoming-events {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #34495e;
            color: wheat;

        }

        .horizontal-menu {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #34495e;
            color: wheat;
        }

        .horizontal-menu .bottom-navbar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            background: #2c3e50;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .horizontal-menu .nav {
            list-style: none;
            margin: 0;
            display: flex;
            justify-content: start;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-left: 10px;

        }

        .horizontal-menu .nav-item {
            position: relative;
            padding-right: 6px;
        }

        .horizontal-menu .nav-item .nav-subitem {
            display: none;
            position: absolute;
            left: 0;
            background: #34495e;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;

        }

        .horizontal-menu .nav-link {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .horizontal-menu .nav-link:hover,
        .horizontal-menu .nav-link:focus {
            background-color: #34495e;
            color: #f0f0f0;
            transition: background-color 0.3s, color 0.3s;
        }

        .submenu {
            display: none;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }



        .horizontal-menu .submenu {
            display: none;
            position: absolute;
            left: 0;
            background: #34495e;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .nav-item:hover .submenu {
            display: block;
            max-height: 200px;
            /* Adjust based on content size */
        }

        .horizontal-menu .submenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .horizontal-menu .submenu li a {
            padding: 10px 20px;
            display: block;
            color: white;
            text-decoration: none;
        }

        .horizontal-menu .submenu li a:hover {
            background-color: #2c3e50;
        }

        .add-merch {
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

        h3 {
            text-align: center;
            padding: 10px 10px;
            margin: 0 auto;
        }

        /* Overall table styling */
        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Header styling */
        .table thead th {
            background-color: #4CAF50;
            color: white;
            border-bottom: 2px solid #333;
        }

        /* Zebra striping for rows */
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Button styling */
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 4px 8px;
            /* Reduced padding */
            font-size: 12px;
            /* Smaller font size */
            line-height: 1.5;
            /* Adjust line height for better text alignment */
            border-radius: 3px;
            /* Smaller border radius for a more refined look */
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }


        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table {
                display: block;
                overflow-x: auto;
            }
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
        <br>
        <button  type="submit">Submit</button>
    </form>



    <div class="merch-show">
        <h3>Merchandise List</h3>

       

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Band Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Recommended</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($merch_product as $product)
                <tr>
                    <td>{{ $product->band_name }}</td>
                    <td>{{ $product->type }}</td>
                    <td>৳{{ $product->price }}</td>
                    <td>{{ $product->recommended }}</td>
                    <td>
                        <form action="{{ route('delete_product', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-prod">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>