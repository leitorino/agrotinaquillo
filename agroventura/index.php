<!--<?php

error_reporting(0);
$v1 = $_GET['el'];
if ($v1 == 1 ){
    echo'<script>alert("Error al iniciar sesion, nombre de usuario o contraseña erroneos")</script>';
}if($v1 == 2){
    echo'<script>alert("Registro exitoso")</script>';
}

?>-->

<!DOCTYPE html>



<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agroaventuras C.A.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500"><!--pendiente-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/remplazo.css" rel="stylesheet">
      <link href="css/kkk.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
       <a class="navbar-brand" href="#page-top"><img src="foto/logo_agro.png" alt="" class="img-responsive"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Galería</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" href="#">Iniciar Sesión</a>
                <div class="dropdown">
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="nav-item">
                            <a role="menuitem" class="nav-link js-scroll-trigger" tabindex="-1" data-toggle="modal" data-target="#modal_login" href="#">Cliente</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a role="menuitem" class="nav-link js-scroll-trigger" tabindex="-1" data-toggle="modal" data-target="#modal_logint" href="#">Trabajador</a>
                        </li>
                    </ul>
                </div>
            </li>


          </ul>
        </div>
      </div>
    </nav>
<!-- modal del login cliente-->
  <div class="modal fade" id="modal_login" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ml-auto" >


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body m-0 ">
     <center> <img src="foto/logo_agro.png" alt="" class="img-responsive"></center>
        <form method="POST" action="login-usuario.php" name="form-usuario">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label"><img src="icono/ic_account_circle_black_24dp_1x.png"  class="img-responsive">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label"><img src="icono/ic_https_black_24dp_1x.png"  class="img-responsive">Contraseña:</label>
             <input type="password" class="form-control" id="contraseña" name="clave" required>
            </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Iniciar Sesion">
        <p></p>
       <center>  <a  data-dismiss="modal" data-toggle="modal" data-target="#modal_registro" href="#" >Registrate</a> </center>
        </form>


      </div>
    </div>
  </div>
</div>
   <!-- fin modal-->
      <!-- modal del login trabajador-->
  <div class="modal fade" id="modal_logint" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ml-auto" >


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body m-0 ">
     <center> <img src="foto/logo_agro.png" alt="" class="img-responsive"></center>
        <form method="POST" action="login-trabajador.php" name="form-trabajador">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label"><img src="icono/ic_account_circle_black_24dp_1x.png"  class="img-responsive">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label"><img src="icono/ic_https_black_24dp_1x.png"  class="img-responsive">Contraseña:</label>
             <input type="password" class="form-control" id="contraseña" name="clave">
          </div>


        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Iniciar Sesion">
        <p></p>
        </form>



      </div>
    </div>
  </div>
</div>
   <!-- fin modal-->

   <!-- modal registro-->
   <div class="modal fade" id="modal_registro" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg " >
    <div class="modal-content">
      <div class="modal-header " >

        <img  src="icono/ic_arrow_back_black_24dp_1x.png"  class="img-responsive mr-auto"  data-dismiss="modal" data-toggle="modal" data-target="#modal_login">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body m-0 ">
     <center> <img src="foto/logo_agro.png" alt="" class="img-responsive"></center>
       <p></p>
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header" data-background-color="green">
                      <h4 class="title">Regirtro </h4>
      <p class="category">Complete los campos</p>
                  </div>
                  <div class="card-content">
                      <form method="POST" action="registro-persona.php">
                          <div class="row my-4">
                              <div class="col-md-5">

            <div class="form-group group ">
              <input type="text" class="input2 " id="usuario" maxlength="30" name="usuario" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Nombre de usuario</label>

            </div>
                              </div>
                              <div class="col-md-3">

            <div class="form-group group ">
              <input type="email" class="input2 " id="correo" maxlength="60" name="email" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Correo</label>

            </div>
                              </div>
                              <div class="col-md-4">

            <div class="form-group group ">
              <input type="password" class="input2 " id="contraseña"  minlength="8" maxlength="50" name="clave" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Contraseña</label>

            </div>
                              </div>

                          </div>
                             <div class="row">
                              <div class="col-md-3">

                                   <div class="form-group  group my-2">

                                                           <select class="form-control input2" id="t-identificacion" name="tipdoc">
                                                             <option value="1">Cédula</option>
                                                             <option value="2">Rif</option>
                                                             <option value="3">Pasaporte</option>

                                                           </select>
                                                           <span class="highlight"></span>
                                                           <span class="bar"></span>
                                                            <label class="label2">Tipo de documentación </label>
                                                         </div>
                              </div>
                              <div class="col-md-5">

            <div class="form-group group ">
              <input type="text" class="input2 val-numero" id="n-documento" maxlength="30" name="numdoc" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Número de documento</label>

            </div>
                              </div>
                              <div class="col-md-4">

            <div class="form-group group ">
              <input type="text" class="input2 val-numero" id="telefono" maxlength="20" name="telefono" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Teléfono</label>

            </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">

            <div class="form-group group ">
              <input type="text" class="input2 " id="nombre" maxlength="60" name="nombre" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Nombre </label>

            </div>
                              </div>
                              <div class="col-md-6">

            <div class="form-group group ">
              <input type="text" class="input2 val-letras" id="apellidos" maxlength="40" name="apellidos" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Apellidos</label>

            </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-12">

            <div class="form-group group ">
              <input type="textarea" class="input2 " id="usuario" maxlength="100" name="direccion" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Dirección</label>

            </div>
                              </div>
                          </div>


                          <button type="submit" class="btn  pull-right color-verde titulo">Registrar</button>
                          <div class="clearfix"></div>
                      </form>
                  </div>
              </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
   <!-- fin-->
    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Bienvenidos a Agroaventuras</h1>
          <hr>
          
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Más Información</a>
        </div>
      </div>
    </header>

    <section class="bg-primary " id="about">

			<div class="container-fluid ">

 <div class="row my-5">
                                          <div class="col-lg-8 mx-auto text-center">
                                            <h2 class="section-heading">Agroaventuras </h2>
                                            <hr class="primary">
                                            <p >El lugar en donde la diversión,el entretenimiento y el descanso son una experiencia inolvidable</p>
                                            
                                            <p class="">Cuenta con todas sus  instalaciones equipadaspara que usted,su familia y sus amigos disfruten de las bellezas de la naturaleza en un lugar tranquilo y acogedor.</p>
                                            <p class="">Nuestras instalaciones son ideales para planes vacacionales ,campamentos y grupos familiares.</p>
                                            <div class="container" >
    <div class="row my-5">
    <div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive " src="img/inicio/general.jpg" /></div>
        <div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive" src="img/inicio/niño.png" /></div>
        <div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive" src="img/inicio/3edad.jpg" /></div>
        <div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive" src="img/inicio/discapacitados.jpg" /></div>
  </div>
              </div>
            </div>

                                 </div>
        </div>


    </section>

    <section id="services">

      

    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1-g.png">
              <img class="img-fluid" src="img/portfolio/fullsize/1-g.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2-j.png">
              <img class="img-fluid" src="img/portfolio/fullsize/2-j.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3-j.png">
              <img class="img-fluid" src="img/portfolio/fullsize/3-j.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/fullsize/4-j.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5-j.png">
              <img class="img-fluid" src="img/portfolio/fullsize/5-j.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6-j.png">
              <img class="img-fluid" src="img/portfolio/fullsize/6-j.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Realiza tu reserva ya!</h2>
      
      </div>
    </div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactanos!</h2>
            <hr class="primary">
            <p>Entrada frente a la bomba PDV de Taguanes, Vía las arenerasTinaquillo Edo. Cojedes</p>
            <p>Horarios: Sabados, Domingos y dias Feriados de  9:00 am a 5:00pm</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>0414-59-74326</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">agroaventuras@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <script src="js/custom.js"></script>
  </body>

</html>