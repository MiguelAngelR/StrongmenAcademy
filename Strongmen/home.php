<?php session_start(); ?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="css/home2.css" rel="stylesheet">
  <head>

    <body>
      <style>
      body {overflow-x:hidden;}
      </style>

      <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:#00001a; ">
          <a class="navbar-brand" href="#">
           <img src="res/logo.png" width="50" height="50" alt="">
           Strongmen Academy
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="home2.html">Inicio  <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="about.html">Acerca de Nosotros</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="asesorias.html">Asesorias</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="aulas.html">Aulas</a>
               </li>
             </ul>
             <?php
             if (isset($_SESSION["usuario"])) {
               echo "<ul class=\"navbar-nav navbar-right \">
               <li class=\"nav-item \">
                 <a class=\"nav-link\" href=\"php/cerrar.php\">Cerrar Sesion</a>
               </li>
             </ul>";
             }else{
              echo "
             <ul class=\"navbar-nav navbar-right \">
               <li class=\"nav-item \">
                 <a class=\"nav-link\" href=\"registro.php\">Registro</a>
               </li>
               <li class=\"nav-item \">
                 <a class=\"nav-link\" href=\"login.php\">Login</a>
               </li>
             </ul>"; 
             }

             ?>
           </div>
        </nav>
      </header>
      <BR></br>
      <div class="row">
      <div class="col-lg-12">
      <div class="container-portada">
        <div class="capa-gradient"></div>
          <div class="container-details">
            <div class="details text-center">
        <br></br>
        <h1>Stay Strong</h1>
        <br></br>
        <p class="lead">Centro Deportivo dedicado a la fuerza, el alto rendimiento, la rehabilitación deportiva y la prescripción del ejercicio de manera adecuada.</p>
        <br></br>
        <a href= "#" class="btn btn-info btn-lg"role="button">Conocenos</a>
          </div>
      </div>
      </div>
    </div>
  </div>

      <section>
        <br>
        <center><H1> Servicios </h1></center>
          <div class="container marketing">
        <div class="row">
        <div class="col-lg-6">
          <a href="asesorias.html"> <img src="res/foto1.jpg" class="bd-placeholder-img rounded-circle" width="400" height="400" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
          <br></br>
        <center>  <h2>Asesorias</h2> </center>
          <p>Asesorate con los mejores, sube y baja archivos para mejorar tus estadisticas y actualizar tu información, tambien peudes entablar una videollamada y con tu
            entrenador par aclarar dudas.</p>
          <p>
        </div>
        <div class="col-lg-6">
          <a href="aulas.html"> <img src="res/foto2.jpg" class="bd-placeholder-img rounded-circle" width="400" height="400" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
          <br></br>
          <center> <h2>Aulas</h2></center>
          <p>Revisa los nuevos cursos que tenemos para ti, cursos de pesas hasta isometricos, elige lo que a ti mas te convenga de entre todo nuestro repertorio además ve los videos cuando y donde quieras.</p>
        </div>
        </div>
          <br></br>
        <div class="container-fluid text-center">
          <h3>¿Como te ayudamos?</h3>
          <br>
          <div class="row">
            <div class="col-sm-4">
              <p>Entrena tu mente. <span class="text-muted">y tu cuerpo tambien.</span></p>
              <img src="res/publicidad/foto2.png" class="img-fluid m-x-auto zoom"  width="300" height="300"> </img>
              <br></br>
              <p>Pacticar deportes, ir al gimnasio, salir a correr o simplemente agregar un poco de movimiento a tu vida, no solo reflejará resultados a nivel físico, sino que también, habrá númerosos beneficios a nivel psicológico/mental que complementerán tu estado de salud general. Recuerda que, lo que estés haciendo hoy, determinará bastante como vivas mañana. </p>
            </div>
            <div class="col-sm-4">
              <p>No hay edad para <span class="text-muted">empezar a entrenar.</span></p>
              <img src="res/publicidad/foto3.jpg" class="img-fluid m-x-auto zoom" width="300" height="300" > </img>
              <br></br>
              <p>Cada vez se conoce más sobre los beneficios que el entrenamiento con pesas o lastres puede tener sobre la salud y el rendimiento desde muy tempranas edades. Que no te sigan contando o engañando con mitos sin fundamento; los niños/as DEBEN hacer ejercicio y PUEDEN ir al gimnasio. En manos de un verdadero profesional, el riesgo es el mismo al de jugar fútbol o practicar taekwondo.</p>
            </div>
            <div class="col-sm-4">
              <p>Excelente ambiente <span class="text-muted">y equipo.</span></p>
              <img src="res/publicidad/equipo.jpg" class="img-fluid m-x-auto zoom" width="300" height="300" > </img>
              <br></br>
              <p>Cotamos con equipo de calidad para otorgarte una mejor facilidad y .....</p>
            </div>
          </div>
        </div>

      </div>
      </section>
      <br> </br>

      <footer class="background-4">
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-md-3"><center><h5> Gracias</h5></center>
                    <p> bliblbiblbiblbibliblbiblbiblbiblbiblbi
                      lbliblbiblbiblibblibbliblbib
                    </p>
                  </div>
                    <div class="col-md-3">
                    <center><h5>Consultar</h5></center>
                      <ul>
                        <li><a href="home2.html">Inicio</a></li>
                        <li><a href="#">Acerca de nosotros</a></li>
                        <li><a href="asesorias.html">Asesorias</a></li>
                        <li><a href="aulas.html">Aulas</a></li>
                    </div>
                      <div class="col-md-3">
                      <center><h5>Contactanos </h5></center>
                        <p> Telefono: +520000000000</p>
                        <hr color= "ffffff">
                        <p> Direccción: hajajahssjakkausa
                          sjshusooausus </p>
                        <hr color= "ffffff">
                        <p> Correo electronico: </p>
                        <p> donpatitofeo@yahoo.com </p>
                      </div>
                      <div class="col-md-3">
                      <center><h5> Registrate </h5></center>
                      <br>
                      <br>
                      <center> <a href="registro.php" class="btn btn-danger btn-lg" role="button"> Registro </a></center>

                      </div>
                </div>
              </div>

              <!-- Footer Elements -->
          <div class="redes">
            <!--<h1><span class="glyphicon glyphicon-cog"></span> Hola </h1>-->
                  <!-- Facebook -->
                  <a href="#" class="facebook"<i class="fa fa-facebook"></i></a>
                  <!-- Twitter -->
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <!--Instagram-->
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>

            <!-- Copyright -->
              <div class="footer-copyright text-center py-3">© 2019 Copyright: Strongmen Academy
              </div>
              <!-- Copyright -->

            </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
