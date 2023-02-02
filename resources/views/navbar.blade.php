<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title') | Recycon</title>

</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e96e7">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('see_items/')}}">Show Items</a>
          </li>

          @auth
          @if(Auth::user()->role == 'admin')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manage Items
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{url('edit_items/')}}">Edit Items</a></li>
              <li><a class="dropdown-item" href="{{url('/add_item')}}">Add Item</a></li>
            </ul>
            </li>
            @endif


            @if(Auth::user()->role == 'user')
            <li class="nav-item">
                <a class="nav-link" href="{{url('cart/')}}">My Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transaction History</a>
            </li>
            @endif
            </ul>

        <form action="/search" method="get" class="d-flex">
            {{ csrf_field() }}
          <input name = "item_search" class="form-control" type="search" placeholder="Search Product Name..." aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><span class="dropdown-item-text fw-light" href="#">Hello, </span></li>
            <li><span class="dropdown-item-text fw-bold" href="#">{{Auth::user()->username}}</span></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('edit_profile/')}}">Edit Profile</a></li>
            <li><a class="dropdown-item" href="{{url('edit_password/')}}">Change Password</a></li>
        </ul>
        </li>

          <a href="{{url('logout/')}}" class="btn btn-outline-danger btn-light mr-1" type="button">Logout</a>

        @else
        <ul class="float-end">
            <a href="{{url('login/')}}" class="btn btn-success" type="button">Login</a>
            <a href="{{url('signup/')}}" class="btn btn-outline-secondary btn-light" type="button">Sign Up</a>
        </ul>
        @endauth
        </ul>

      </div>
    </div>
  </nav>

<body>
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

<footer class="bg-light text-center">
  <div class="text-center p-3 text-light" style="background-color: #1e96e7; padding-top: 10;">
    © 2022 Copyright BQ01-LAB
    <br>
    2440013701- JERREMY JOY
    <br>
    2440037992 - JASON MATHEW ALDIANTO
  </div>
</footer>

</html>
