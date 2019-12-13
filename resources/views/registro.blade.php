<?php
 session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">


    <title>Formulario de registro</title>
    <link rel="stylesheet" href="CSS/registro.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
<?php
require_once('plantilla/header.php');
require_once('plantilla/menu.php');
 ?>

    <div class="container">

    
        <div class="container">
          <h4>FORMULARIO DE REGISTRO</h4>

          <form class="" action="registro.php" method="post" enctype="multipart/form-data">
            <div class="error"><?php echo $errores['nombres']; ?></div>
            <input class="controles" type="text" name="nombres" value="<?php echo $usuario['nombres']; ?>" placeholder="Ingrese su nombre">
            <div class="error"><?php echo $errores['apellido']; ?></div>
            <input class="controles" type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" placeholder="Ingrese su apellido" >
            <div class="error"><?php echo $errores['email']; ?></div>
            <input class="controles" type="email" name="email" value="<?php echo $usuario['email']; ?>" placeholder="Ingrese su correo electronico">
            <div class="error"><?php echo $errores['password']; ?></div>
            <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">

            <input class="controles" type="password" name="confirmacion" value="" placeholder="Confirme su contraseña">
            <div class="form-group">
              <label for="avatar">Subir avatar</label>
              <input type="file"  id="avatar" name="avatar">
            </div>
            <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
            <p>Ya estás registrado? <a class="link" href="login.php">Iniciar sesión</a></a> </p>



          </form>
          <?php
           if($registroCorrecto==1){?>
            <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">REGISTRADO EXITOSAMENTE!</h4>
          <p>Bienvenido <?php echo $usuario['nombres']; ?>, con email <?php echo $usuario['email']; ?> </p>
          <hr>
          <p class="mb-0">Bienvenido a Dayross.</p>
        </div>

        <?php  } ?>

        </div>
<?php
require_once('plantilla/footer.php');
 ?>


  </body>
</html>
