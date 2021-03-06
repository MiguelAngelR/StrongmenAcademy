
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="res/logo.ico" rel="icon">
  <link rel="stylesheet" href="css/signin.css">
    <script type="text/javascript">
      <?php
          session_start();
          if($_SESSION["error_nombre"]==1){
              echo "alert('ya se ha regitrado un usuario con este nombre o contraeña');";
              $_SESSION["error_nombre"]=0;
          }
      ?>
    </script>
  <title>Registro</title>

</head>
  <body>
    <style>
    body::-webkit-scrollbar{
      width: 10px;
      background: #00001a;
    }
    body::-webkit-scrollbar-thumb{
      background: rgba(255, 255, 255, .3);
      border-radius: 10px;
      border-right: 2px solid #00001a;
    }
    </style>

  <header class="content header">
    <!-- Seccion del video -->
    <div class="header-video">
      <video src="video/befirst.mp4" type="video/mp4" muted autoplay loop></video>
    </div>

    <!-- capa transparente -->
    <div class="header-overlay"></div>

    <!-- Seccion del contenido -->
    <div class="header-content">
      <br>
      <br>
      <br>
      <br>
      <form class="form-signin" method="post" action="php/registro.php" onsubmit="return validar()">
        <img class="mb-4" src="res/logo.png" alt="" width="260" height="210">
         <h1 class="h4 mb-3 font-weight-normal">Registrate</h1>
          <div class="form-group">
            <div class="form-group row">
              <label for="nombre" class="col-sm-3 col-form-label">Nombre(s)</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tus nombre(s)" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="apellidos" class="col-sm-3 col-form-label">Apellido Paterno</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="ap_pat" name="ap_pat" placeholder="Escribe tu Apellido Materno" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="apellidos" class="col-sm-3 col-form-label">Apellido Materno</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="ap_mat" name="ap_mat" placeholder="Escribe tu Apellido Paterno" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu email" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Escribe una contraseña" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="repassword" class="col-sm-3 col-form-label">Confirmar Contraseña</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Confirmar contraseña" required>
              </div>
            </div>
            <small id="emailHelp" class="form-text">Jamás compartiremos tu información con terceros.</small>
          </div>


          <button name="login" class="btn btn-lg btn-light btn-block" type="submit">Registrarse</button>
          <a href="login.html">
              <button type="button" name="button" class="btn btn-outline-light"> ¿Ya tienes una cuenta? Da click aquí. </button>
          </a>

      </form>
    </div>

  </header>
  <!--script-->


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validaciones.js" ></script>
  </body>
</html>
