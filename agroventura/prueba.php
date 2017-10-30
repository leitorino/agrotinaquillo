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
      


    <!-- Custom styles for this template -->
    <link href="css/remplazo.css" rel="stylesheet">
  <script>
    function cambiar() {
        alert("Ha sido registrado correctamente");
    } 
    function aceptar() {
        alert("Ha iniciado sesión correctamente");
    }
</script>

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
              <a class="nav-link " data-toggle="modal" data-target="#modal_login" href="#" id="iniciar">Iniciar Sesión</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
<!-- modal del login-->
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
        <form >
          <div class="form-group">
            <label for="recipient-name" class="form-control-label"><img src="icono/ic_account_circle_black_24dp_1x.png"  class="img-responsive">Usuario:</label>
            <input type="text" class="form-control" id="usuario">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label"><img src="icono/ic_https_black_24dp_1x.png"  class="img-responsive">Contraseña:</label>
             <input type="password" class="form-control" id="contraseña">
          </div>
          
          
       <center> <a name="devermut" class="btn btn-primary btn-xl js-scroll-trigger"  onclick="aceptar()" data-dismiss="modal">Iniciar Sesión</a></center>
      
       <center> <a class="my-4" data-dismiss="modal" data-toggle="modal" data-target="#modal_recuperacion" href="#" >¿Olvidaste tu contraseña?</a> &nbsp;
         <a  data-dismiss="modal" data-toggle="modal" data-target="#modal_registro" href="#"  id="registrar">Registrate</a> </center>
        </form>
        
       
      </div>
    </div>
  </div>
</div>
   <!-- fin modal-->
   <!-- modal recuperacion-->
   <div class="modal fade" id="modal_recuperacion" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header " > 
       
        <img  src="icono/ic_arrow_back_black_24dp_1x.png"  class="img-responsive mr-auto"  data-dismiss="modal" data-toggle="modal" data-target="#modal_login">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body m-0 ">
     <center> <img src="foto/logo_agro.png" alt="" class="img-responsive"></center>
        <form>
          <div class="form-group my-4">
            <input type="text" class="form-control" id="correo" placeholder="Ingrese su correo electronico">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Pregunta de seguridad:</label>
             <select class="form-control" id="pregunta_seguridad">
              <option>1</option><!-- en la parte de las opciones se tiene que cargar de php-->
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group ">
            <input type="text" class="form-control" id="respuesta" placeholder="Respuesta">
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block">Buscar</button>
        </form>
        
        
      </div>
    </div>
  </div>
</div>
   <!--fin recuperacion-->
   <!-- modal registro-->
   <div class="modal fade" id="modal_registro" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
        <form >
  <div class="form-row my-3">
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control" id="usuario-reg" placeholder="Nombre de usuario">
      </div>
    <div class="form-group col-md-6">
      
      <input type="password" class="form-control" id="contraseña-reg" placeholder="Contraseña">
    </div>
  </div>
   <div class="form-group  my-3">
            <select class="form-control" id="pregunta_seguridad-reg">
              <option>1</option><!-- en la parte de las opciones se tiene que cargar de php-->
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
   </div>
   <div class="form-group my-3">
     
      <input type="text" class="form-control" id="respuesta2-reg" placeholder="Respuesta de seguridad">
    </div>
  
  <div class="form-group  my-3">
     
      <input type="email" class="form-control" id="correo-reg" placeholder="correo electronico">
    </div>
  
  <button id="regis" type="button" class="btn btn-primary btn-lg btn-block" onclick="cambiar()" data-dismiss="modal">Registrar</button>
</form>
        
       
      </div>
    </div>
  </div>
</div>
   <!-- fin-->
    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Bienvenidos a Booktl</h1>
          <hr>
          <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
          <a name="mas-informacion" class="btn btn-primary btn-xl js-scroll-trigger" href="http://localhost/librero/">Más Información</a>
        </div>
      </div>
    </header>
 


 


    <!-- Bootstrap core JavaScript -->
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

  </body>

</html>
