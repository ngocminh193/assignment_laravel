<?php
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

        $posts = Post::all();
        $category = Category::all();
        $user = User::all();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/68b5d28c52.css" media="all" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{route('homepage.index')}}">Minhnn</a>
        <ul class="navbar-nav ml-auto">
        @foreach($category as $cate)
          <li class="nav-item">
                <a class="nav-link" href="{{route('homepage.listPost', [$cate->id])}}">{{$cate->name}}</a>
          </li>
        @endforeach  
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @if(!Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{route('homepage.login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
              </li>
            @endif
            @if(Auth::check())
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">{{Auth::user()->name}}</a>
                  <ul class="dropdown-menu" style="min-width:auto;text-align:center;">
                      <li><a href="{{route('homepage.showProfile', [Auth::user()->id])}}">Edit info</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('homepage.logout')}}">Logout</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        @yield('content')

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>