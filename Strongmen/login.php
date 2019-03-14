  <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/signin.css">


  <title>Login</title>
  <?php
    session_start();
    if($_SESSION["error_login"] ==1){
      echo "<script>alert('No se encontro ningun usuario con el correo proporcionado')</script>";
    }
    if($_SESSION["error_login"] == 2){
     echo "<script>alert('La contraseña proporcionada no es correcta')</script>"; 
    }
    $_SESSION["error_login"]=0;
  ?>

</head>
  <body>
  <header class="content header">
    <!-- Seccion del video -->
    <div class="header-video">
      <video src="video/befirst.mp4" type="video/mp4" muted autoplay loop></video>
    </div>

    <!-- capa transparente -->
    <div class="header-overlay"></div>

    <!-- Seccion del contenido -->
    <div class="header-content">

      <form class="form-signin" method="post" action="php/login.php">
       <img class="mb-4" src="res/logo.png" alt="" width="260" height="210">
       <h1 class="h4 mb-3 font-weight-normal">Iniciar Sesión</h1>

       <div class="form-group row">
         <label for="Email" class="col-sm-3 col-form-label">Email</label>
         <div class="col-sm-9">
           <input type="email" class="form-control" id="Email" name="email" placeholder="Escribe tu correo" required>
         </div>
       </div>
       <div class="form-group row">
         <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
         <div class="col-sm-9">
           <input type="password" class="form-control" id="password" name="password" placeholder="Escribe tu contraseña" required>
         </div>
       </div>

       <a href="https://www.google.com.mx/">
          <button type="button" name="button" class="btn btn-outline-light"> Olvide mi contraseña </button>
       </a>

       <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="remember-me"> Recordar mi contraseña
         </label>
       </div>
       <button name="login" class="btn btn-lg btn-light btn-block" type="submit">Entrar</button>
       <a href="registro.html">
          <button type="button" name="button" class="btn btn-outline-light"> ¿Aún no tienes una cuenta? Da click aquí. </button>
       </a>
      </form>

    </div>

  </header>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>
