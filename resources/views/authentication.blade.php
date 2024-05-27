<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration or Sign Up form</title>
  <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <div class="welcomevid">
    <video autoplay muted loop id="myVideo">
      <source src="{{ asset('Media/Welcome.mp4') }}" type="video/mp4">
    </video>
  </div>


  <h2 class="text-white text-center text-md-right">New to Rhythmic Pulse? Register Now! </h2>

  <form action="/register" method="POST">
    @csrf
    <div class="input-box">
      <input type="text" name="username" value="{{old('username')}}" placeholder="Enter your username">

    </div>


    <div class="input-box">
      <input type="text" name="email" value="{{old('email')}}" placeholder="Enter your email">
    </div>



    <div class="input-box">
      <input type="password" name="password" placeholder="Create password">

    </div>


    <div class="input-box">
      <input type="password" name="password_confirmation" placeholder="Confirm password">
    </div>


    <div class="policy">
      <input type="checkbox" name="terms" required>
      <h3>I accept all terms & conditions</h3>
    </div>
    <div class="input-box button">
      <input type="submit" value="Register Now">
    </div>
    <div class="text">
      <h3>Already have an account?
        <button class="SigninLink btn-outline-primary mb-3 btn-lg"> Sign In </button>
      </h3>
    </div>
  </form>
  </form>


  <div class="login-form" id="loginForm">
    <h2 class="text-black text-center"> Login</h2>


    <form action="/register" method="POST" class="mb-0 pt-2 pt-md-0">
      @csrf
      <div class="input-box">
        <input name="loginusername" type="text" value="{{old('email')}}" placeholder="Enter your username">
        @error('username')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>


      <div class="input-box">
        <input name="loginpassword" type="password" placeholder="Enter your password">
        @error('password')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>



      <div class="input-box button">
        <input class="LoginLink" type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account?
          <button class="registerLink btn-outline-primary mb-3 btn-lg"> Register Now </button>
        </h3>
      </div>
    </form>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".SigninLink").click(function() {
          $("#loginForm").show();
        });

        $(".registerLink").click(function() {
          $("#loginForm").hide();
          $("#welcomevid").show();
        });

      });
    </script>


</body>

</html>