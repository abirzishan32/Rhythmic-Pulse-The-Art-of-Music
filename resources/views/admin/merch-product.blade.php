

@extends('layouts.app')

@section('content')
    <div class="upcoming-events">
        <div>
            <h3>
                MERCH PRODUCTS
            </h3>
        </div>
    </div>
<!-- 
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
    </div> -->

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
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection
