@extends('plantillas/plantilla')
@section('contenido')


 <!doctype html>
 <html class="en" lang="ltr">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="x-ua-compatible" content="ie=edge">
 	<title>Iniciar sesion /Dayross</title>
 	<meta name="description" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="perfil.php">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/stylos.css">
  <link rel="stylesheet" href="CSS/login.css">

  </head>
  <body>

<br>
          <div class="ht__bradcaump__area bg-image--3">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="bradcaump__inner text-center">
                          	<h2 class="bradcaump-title">INICIAR SESION</h2>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
<br>
    <div class="container">


@csrf
      <form class="" action="login.php" method="post" enctype="multipart/form-data">
      <input class="controles" type="email" name="email" value="" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">
      <input type="checkbox" name="mantenerme" value="">
      <label for="">Mantenerme logueado</label>
      <button class="" type="submit" class="btn btn-secondary btn-sm">Login</button>
      </form>
      <p>No tienes cuenta? <a class="link" href="/registro">Registrate</a></a> </p>

    </div>




 </body>
 </html>
 @endsection
