
    @extends('plantillas/plantilla')
    @section('contenido')


    <div class="container">


        <div class="container"><br>
          <h4>REGISTRO</h4>

          <form class="" action="/registro" method="post" enctype="multipart/form-data">
@csrf
            <div class="error">{{$errores['name'] ?? ''}}<div>
            <input class="controles" type="text" name="nombres" value="{{$usuario['nombre'] ?? ''}}" placeholder="Ingrese su nombre">
            <div class="error">{{$errores['apellido'] ?? ''}}</div>
            <input class="controles" type="text" name="apellido" value="{{$usuario['apellido'] ?? ''}}" placeholder="Ingrese su apellido" >
            <div class="error">{{$errores['email'] ?? ''}}</div>
            <input class="controles" type="email" name="email" value="{{$usuario['email'] ?? ''}}" placeholder="Ingrese su correo electronico">
            <div class="error">{{$errores['password'] ?? ''}}</div>
            <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">

            <input class="controles" type="password" name="confirmacion" value="" placeholder="Confirme su contraseña">
            <div class="form-group">
              <label for="avatar">Subir avatar</label>
              <input type="file"  id="avatar" name="avatar">
            </div>
            <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
            <p>Ya estás registrado? <a class="link" href="login.php">Iniciar sesión</a></a> </p>



          </form>

        </div>



  </body>
</html>
@endsection
