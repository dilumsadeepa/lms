<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The One</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js\bootstrap.bundle.min.js')}}" charset="utf-8"></script>

  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand ml-3" href="#">THE ONE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="space">
        </div>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-5">
            @if (Route::has('login'))
              @auth
                <li class="nav-item">
                  <a class="btn btn-info ml-3" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
              @else
                <li class="nav-item">
                  <a class="btn btn-info ml-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-info ml-3" href="{{ route('register') }}">Register</a>
                </li>
              @endauth
            @endif
            <li class="nav-item">
              <a class="btn btn-info ml-3" href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 main">
          <div class="box">

            <h1>THE ONE</h1>
            <br>
            <h5>Online education system</h5>
            <br>
            <a href="{{ route('login') }}" class="btn btn-info">Get Strated</a>


          </div>
        </div>
      </div>
    </div>




    <style media="screen">
      .space{
        margin-left: 50%;
      }
      .ml-3{
        margin-left: 30px;
      }
      .box{
        text-align: center;
        transform: translateY(30vh);
      }
    </style>

  </body>
</html>
