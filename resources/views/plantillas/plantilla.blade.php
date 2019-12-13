<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/stylos.css">
    <link rel="stylesheet" href="/CSS/carrito.css">

</head>
<body>
  <header>
<div class="container">


  <!--Navbar-->
  <nav class="navbar navbar-light navbar-5 white">

    <!-- Navbar brand -->
    <a class="navbar-brand"> <img src="/img/logo.png" alt="logo"> </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
      aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<a href="carrito.php">
  <ion-icon name="cart"></ion-icon>

      <ion-icon src="/path/to/external/file.svg"></ion-icon>
  </a>
<a href="perfil.php">
      <ion-icon name="contact"></ion-icon>

      <ion-icon src="/path/to/external/file.svg"></ion-icon>
</a>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preguntas.php">Preg.frecuentes</a>
        </li>
      </ul>
      <!-- Links -->

    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->
</div>



</header>

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="/img/foto.png" class="d-block w-100" alt="portada1">
     </div>
     <div class="carousel-item">
       <img src="/img/foto2.png" class="d-block w-100" alt="portada3">
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
  </div>


  <h1 class="title">Productos</h1>

  <div class="container">
    <div class="row">
      <div class="col">
        <form class="" action="carrito.php" method="get">
        <img src="/img/imagen 2.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>

      </div>
      <div class="col">
        <img src="/img/imagen3.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="w-100"></div>
      <div class="col">
        <img src="/img/imagen4.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="col">
        <img src="/img/imagen5.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  $seLogeo = isset($_SESSION);
    ?>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>

      <link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/all.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
  </section>
    <body>

        <footer>


            <div class="img-logo">
              <a href="index.php"><img src="/img/logo.png" alt=""></a>

            </div>

  <ion-icon name="logo-instagram"></ion-icon>
  <ion-icon src="/path/to/external/file.svg"></ion-icon>

  <ion-icon name="logo-facebook"></ion-icon>
  <ion-icon src="/path/to/external/file.svg"></ion-icon>

  <ion-icon name="logo-snapchat"></ion-icon>
  <ion-icon src="/path/to/external/file.svg"></ion-icon>

  <ion-icon name="pin"></ion-icon>
  <ion-icon src="/path/to/external/file.svg"></ion-icon>

  <ion-icon name="logo-pinterest"></ion-icon>
  <ion-icon src="/path/to/external/file.svg"></ion-icon>

          <div class="copyright">
            <span>Copyright 2019 - Dayross©</span>
          </div>

        </footer>

    </body>
  </html>
