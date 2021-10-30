<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job For All</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    
      <a class="navbar-brand" href="{{route('dashboard') }}">Job For All</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('dashboard') }}">Dashboard</a></li>

      @if(Session::has('user'))
      <li ><a href="{{route('sdash') }}">Seeker Dashboard</a></li>
      @endif
      <li ><a href="#">Job List</a></li>

     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="{{route('profile') }}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="{{route('signup') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>


      <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>

</body>
</html>
