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
    <link rel="stylesheet" href="CSS/stylos.css">
    <link rel="stylesheet" href="CSS/carrito.css">
    <link rel="stylesheet" href="CSS/login.css">

</head>
<header>
<div class="container">


  <!--Navbar-->
  <nav class="navbar navbar-light navbar-5 white">

    <!-- Navbar brand -->
    <a class="navbar-brand"> <img src="img/logo.png" alt="logo"> </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
      aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="#">


      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<a href="carrito.php">
  <ion-icon name="cart"></ion-icon>

      <ion-icon src="/path/to/external/file.svg"></ion-icon>
  </a>
<a href="perfil.php">
      <ion-icon name="contact"></ion-icon>

      <ion-icon src="/path/to/external/file.svg"></ion-icon>
</a>
</div>
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
          <a class="nav-link" href="registro.php">Registro</a>
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


 <section class="padre">

 @yield('contenido')

</section>
<footer>


        <div class="img-logo">
          <a href="index.php"><img src="img/logo.png" alt=""></a>

        </div>

<ion-icon name="logo-instagram"></ion-icon>
<ion-icon src="/path/to/external/file.svg"></ion-icon>

<ion-icon name="logo-facebook"></ion-icon>
<ion-icon src="/path/to/external/file.svg"></ion-icon>

<ion-icon name="logo-snapchat"></ion-icon>
<ion-icon src="/path/to/external/file.svg"></ion-icon>

<ion-icon name="pin"></ion-icon>
<ion-icon src="/path/to/external/file.svg"></ion-icon>


      <div class="copyright">
        <span>Copyright 2019 - Dayross©</span>
      </div>

    </footer>
