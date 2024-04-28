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

    <style>
        h3 {
            text-align: center;
            margin: 0 auto;
        }

        .event-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .event-table th,
        .event-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }


        .events-tickets {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #34495e;
            color: wheat;
            padding: 10px;
        }

        .event-table thead th {
            background-color: #333;
            color: white;
            font-weight: bold;
        }

        .event-table tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .event-table tbody tr:hover {
            background-color: #ddd;
        }


        .event-table td:last-child {
            width: 40%;
            text-align: justify;
        }


        @media (max-width: 768px) {

            .event-table,
            .event-table thead,
            .event-table tbody,
            .event-table th,
            .event-table td,
            .event-table tr {
                display: block;
            }

            .event-table thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .event-table tr {
                border: 1px solid #ccc;
            }

            .event-table td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            .event-table td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                font-weight: bold;
                text-align: left;
            }

            .event-table td:nth-of-type(1):before {
                content: "Event Name";
            }

            .event-table td:nth-of-type(2):before {
                content: "Location";
            }

            .event-table td:nth-of-type(3):before {
                content: "Date";
            }

            .event-table td:nth-of-type(4):before {
                content: "Time";
            }

            .event-table td:nth-of-type(5):before {
                content: "Description";
            }
        }

        @media (max-width: 768px) {
            .horizontal-menu .nav {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="events-tickets">
        <div>
            <h3>
                EVENT TICKETS
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
                            <a href="/admin/event-tickets" class="nav-link">
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
                            <a href="/admin/events-tickets" class="nav-link">
                                <span class="menu-title">Events Ticket</span>
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

        <div class="event-show">
            <h3>Events Tickets</h3>
            <table class="table event-table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Number of Seats</th>
                        <th>Event Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticket_list as $ticket)
                    <tr>
                        <td>{{ $ticket->email }}</td>
                        <td>{{ $ticket->contact }}</td>
                        <td>{{ $ticket->number}}</td>
                        <td>{{ $ticket->event_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>