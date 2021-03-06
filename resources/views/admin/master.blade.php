<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="routeName" content="{{ Route::currentRouteName() }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time())  }}">
    <script src="https://kit.fontawesome.com/d5eb7682c6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('/static/libs/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <title>Admin | @yield('title')</title>
</head>
<body>
<div class="wrapper">
    <div class="col1">
        @include('admin.sidebar')
    </div>
    <div class="col2">
        <nav class="navbar navbar-expand-lg shadow">
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                  <li class="nav item">
                      <a class="nav-link" href="{{ route('inicio') }}"><i class="fas fa-house-user"></i>Dashboard</a>
                  </li>
              </ul>
          </div>
        </nav>
        @include('partials.message')
        <div class="page">
            <div class="container-fluid">
                <nav aria-label="breadcrumb shadow" >
                   <ol class="breadcrumb shadow">
                         <li class="breadcrumb-item">
                            <a href="{{ route('inicio') }}"><i class="fas fa-home"></i>Dashboard</a>
                         </li>
                        @yield('breadcrumb')
                   </ol>
                </nav>
            </div>
           @yield('contenido')
        </div>
    </div>
</div>
<script>
    $(".alert").fadeTo(3000,3000).slideUp(800,function(){
        $(".alert").slideUp(800)
    })
  </script>

</body>
</html>
