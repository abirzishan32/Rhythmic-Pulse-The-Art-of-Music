<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Album Management</title>

  <link href="{{ asset('css/admin-panel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">


  <style>
    .go-to-band{
      display: block;
      margin-top: 10px;
      text-align: center;
      color: #333;
    }
  </style>

</head>
<body>
    
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
