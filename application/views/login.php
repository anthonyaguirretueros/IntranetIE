
<!DOCTYPE html>
<html>
    <head>
        <title>INTRANET</title>
<!--    <link rel="icon" type="image/png" href="/img/logo.png" />    -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="assets/bootstrap/css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">


    </head>
    <body>
 <div class="container">
    <form action=""  class="form-horizontal" method="post">
      <div class="row">
      
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <!-- Estructura del formulario -->
          <fieldset>

            <legend class="center">Login</legend>

            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" name="username" placeholder="Ingresa tu usuario">
            </div>

            <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" name="password" class="form-control" id="clave" placeholder="Ingresa tu contraseña">
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="assets/bootstrap/img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="submit" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="spacing-2"></div>

            </section>

          </fieldset>
        </div>

      </div>
      </form>
    </div>

     <!-- Jquery -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="assets/bootstrap/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    </body>
</html>