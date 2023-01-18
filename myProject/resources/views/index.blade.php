<!DOCTYPE html>
<html lang="en">
<head>
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap"
    rel="stylesheet"
/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sasto Pasal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display">Products</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="card-body">
          @if (session('status'))
                <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                </div>
          @endif
          
  <div class="container">
    <img class ="w-100"src="../img/book.jpg" alt="no image found">
  </div>
  <div class="container mt-5"> 
    <div class="row text-center">
      <div class="col-sm-4 border">
        <img class="w-100"  src="../img/burn.jpg" alt="">
        <h2>Lorem</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id libero maxime amet, et incidunt sapiente saepe laborum tenetur, neque consequuntur ab? Suscipit molestiae ea ex in vitae dolorem repellat! Nam!</p>
      </div>
      <div class="col-sm-4 border">
        <img class="w-100"  src="../img/book.jpg" alt="">
        <h2>Lorem</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id libero maxime amet, et incidunt sapiente saepe laborum tenetur, neque consequuntur ab? Suscipit molestiae ea ex in vitae dolorem repellat! Nam!</p>
      </div>
      <div class="col-sm-4 border">
        <img class="w-100"  src="../img/business.jpg" alt="">
        <h2>Lorem</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id libero maxime amet, et incidunt sapiente saepe laborum tenetur, neque consequuntur ab? Suscipit molestiae ea ex in vitae dolorem repellat! Nam!</p>
      </div>      
    </div>
  </div>   -->
    <!-- <div class="mt-5 text-center">
      <h1>Lorem</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto reiciendis rerum qui minima accusamus blanditiis adipisci velit non, aliquid hic aliquam ea eum doloremque perspiciatis beatae vel sit! Cum, at.</p>
    </div>
  </div>
</body>
<!-- Footer-->
<footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Lucifer MorningStar</div></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>