<?php session_start(); ?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="css/home2.css" rel="stylesheet">

      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {overflow-x:hidden;}
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
  </head>

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
             <a class="nav-link" href="home.php">Inicio  <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="asesorias.html">Asesorias</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="aulas.html">Aulas</a>
           </li>
         </ul>
         <ul class="navbar-nav navbar-right ">
           <li class="nav-item ">
             <a class="nav-link" href="registro.php">Registro</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="login.php">Login</a>
           </li>
         </ul>
       </div>


    </nav>
  </header>

     <main role="main">
      <!-- Portada-->

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="res/slide/1.jpg" class="bd-placeholder-img" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ></img>
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Stay Strong</h1>
                  <p>Centro Deportivo dedicado a la fuerza, el alto rendimiento, la rehabilitación deportiva y la prescripción del ejercicio de manera adecuada.</p>
                  <p><a class="btn btn-lg btn-info" href="#" role="button">Conocenos</a></p>
                </div>
              </div>
            </div>
          </div>
      </div>


      <section>
        <br>
        <center><H1 style="color:#424242"> Servicios </h1></center>
          <div class="container marketing">
        <div class="row">
        <div class="col-lg-6">
          <a href="asesorias.html"> <img src="res/foto1.jpg" class="bd-placeholder-img rounded-circle" width="400" height="400" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
          <br></br>
        <center>  <h2 style="color:#424242">Asesorias</h2> </center>
          <p style="color:#424242">Asesorate con los mejores, sube y baja archivos para mejorar tus estadisticas y actualizar tu información, tambien peudes entablar una videollamada y con tu
            entrenador par aclarar dudas.</p>
          <p>
        </div>

        <div class="col-lg-6">
          <a href="aulas.html"> <img src="res/foto2.jpg" class="bd-placeholder-img rounded-circle" width="400" height="400" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
          <br></br>
          <center> <h2 style="color:#424242">Aulas</h2></center>
          <p style="color:#424242">Revisa los nuevos cursos que tenemos para ti, cursos de pesas hasta isometricos, elige lo que a ti mas te convenga de entre todo nuestro repertorio además ve los videos cuando y donde quieras.</p>
        </div>
        </div>
          <br></br>
        <div class="container-fluid text-center">
          <h3 style="color:#424242">¿Como te ayudamos?</h3>
          <br>
          <div class="row">
            <div class="col-sm-4">
              <p style="color:#424242">Entrena tu mente. <span class="text-muted">y tu cuerpo tambien.</span></p>
              <img src="res/publicidad/foto2.png" class="img-fluid m-x-auto zoom"  width="300" height="300"> </img>
              <br></br>
              <p style="color:#424242">Pacticar deportes, ir al gimnasio, salir a correr o simplemente agregar un poco de movimiento a tu vida, no solo reflejará resultados a nivel físico, sino que también, habrá númerosos beneficios a nivel psicológico/mental que complementerán tu estado de salud general. Recuerda que, lo que estés haciendo hoy, determinará bastante como vivas mañana. </p>
            </div>
            <div class="col-sm-4">
              <p style="color:#424242">No hay edad para <span class="text-muted">empezar a entrenar.</span></p>
              <img src="res/publicidad/foto3.jpg" class="img-fluid m-x-auto zoom" width="300" height="300" > </img>
              <br></br>
              <p style="color:#424242">Cada vez se conoce más sobre los beneficios que el entrenamiento con pesas o lastres puede tener sobre la salud y el rendimiento desde muy tempranas edades. Que no te sigan contando o engañando con mitos sin fundamento; los niños/as DEBEN hacer ejercicio y PUEDEN ir al gimnasio. En manos de un verdadero profesional, el riesgo es el mismo al de jugar fútbol o practicar taekwondo.</p>
            </div>
            <div class="col-sm-4">
              <p style="color:#424242">Excelente ambiente <span class="text-muted">y equipo.</span></p>
              <img src="res/publicidad/equipo.jpg" class="img-fluid m-x-auto zoom" width="300" height="300" > </img>
              <br></br>
              <p style="color:#424242">Contamos con equipo de calidad para otorgarte una mejor facilidad y .....</p>
            </div>
          </div>
        </div>
      </div>
      </section>
      <br> </br>
      <footer class=" page-footer font-small mdb-color pt-4 background-4  ">

                <div class="container">
                  <div class="row row text-center text-md-left mt-3 pb-3">
                     <div class="col-md-4 mt-md-0 mt-3">
                         <h6 class="text-uppercase mb-4 font-weight-bold text-center">Contactanos</h6>
                       <p>Telefonos:</p>
                       <p> Arturo: 55-65-13-38-84</p>
                       <p> Emmanuel: 77-74-22-64-70</p>
                         <hr color= "ffffff">
                       <p>Direccción: Cuijingo,
                           Estado de Mexico. </p>
                         <hr color= "ffffff">
                       <p> Correo electronico:
                       strongmenlifters@gmail.com </p>
                         <hr color= "ffffff">
                    </div>
                      <hr class="w-100 clearfix d-md-none">

                       <div class="col-md-4 mb-md-0 mb-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold text-center">Ir a: </h6>
                    <p>
                        <center><a href="home2.html">Inicio</a></center>
                    </p>
                    <p>
                          <center><a href="asesorias.html">Asesorias</a></center>
                    </p>
                    <p>
                          <center><a href="aulas.html">Aulas</a></center>
                    </p>
                      </div>
                        <hr class="w-100 clearfix d-md-none">
                        <div class="col-md-4 mb-md-0 mb-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold text-center">Registrate</h6>
                        <br>
                        <br>
                        <center> <a href="registro.php" class="btn btn-danger btn-block" role="button"> Registro </a></center>
                        </div>
                  </div>
                </div>
              <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright: Strongmen Academy
                </div>
                <!-- Copyright -->
              </footer>
          </main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
