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
              <a class="nav-link " data-toggle="modal" data-target="#modal_login" href="#">Iniciar Sesión</a>
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label"><img src="icono/ic_account_circle_black_24dp_1x.png"  class="img-responsive">Usuario:</label>
            <input type="text" class="form-control" id="usuario">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label"><img src="icono/ic_https_black_24dp_1x.png"  class="img-responsive">Contraseña:</label>
             <input type="password" class="form-control" id="contraseña">
          </div>
          
          
        <button type="button" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
        <p></p>
       <center> <a class="my-4" data-dismiss="modal" data-toggle="modal" data-target="#modal_recuperacion" href="#" >¿Olvidaste tu contraseña?</a> &nbsp;
         <a  data-dismiss="modal" data-toggle="modal" data-target="#modal_registro" href="#" >Registrate</a> </center>
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
             <select class="custom-select d-block " required>
    <option value="">Pregunta de seguridad</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
   </div>
   <div class="form-group my-3">
     
      <input type="text" class="form-control" id="respuesta2-reg" placeholder="Respuesta de seguridad">
    </div>
  
  <div class="form-group  my-3">
     
      <input type="email" class="form-control" id="correo-reg" placeholder="correo electronico">
    </div>
  
  <button type="button" class="btn btn-primary btn-lg btn-block">Registrar</button>
</form>
        
       
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
          <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Más Información</a>
        </div>
      </div>
    </header>
 
    <section class="bg-primary " id="about">
     
			<div class="container-fluid ">
				 
						
						<ul class="nav nav-tabs ">
							<li class="nav-item ">
							  
							       <a href="#inicio" class="nav-link active" role="tab" data-toggle="tab">Inicio</a>
    
                              
							</li>
							<li class="nav-item">
							
							       <a href="#acerca_de" class="nav-link " role="tab" data-toggle="tab">Acerca de</a>
    
                               
							</li>
							<li class="nav-item">
							
							       <a href="#tarifa" class="nav-link " role="tab" data-toggle="tab">Tarifas</a>
    
                               
							</li>
						
							
						</ul>
                   <div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="inicio">
                                <div class="row my-5">
                                          <div class="col-lg-8 mx-auto text-center">
                                            <h2 class="section-heading">Agroaventuras</h2>
                                            
                                            <p class="text-faded my-2">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                                            
                                          </div>
                                 </div>
							</div>
                            <div role="tabpanel" class="tab-pane " id="acerca_de">
                               
                              
                                <div class="row">
                                          <div class="col-lg-12 my-5  text-center">
                                             <h2 class="seccion-inicio-titulo">Acerca de</h2>
                                            <h3 class="seccion-inicio-sub text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                                          </div>
                                 </div>
                                 <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/inicio/harry.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading posicion">
                    

                    <h4 class="subheading">Misión</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/inicio/harry2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   
                    <h4 class="subheading">Visión</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/inicio/harry3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    
                    <h4 class="subheading">Normas</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
                      
                       </div>
				<div role="tabpanel" class="tab-pane " id="tarifa">
                
                 
            </div>
           </div>      
        </div>
        
        
    </section>

    <section id="services">
     
      <div class="container ">
        <div class="row my-5">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Servicios</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Servicios</h3>
              <p class="text-muted">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Ready to Ship</h3>
              <p class="text-muted">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Made with Love</h3>
              <p class="text-muted">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
       
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
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
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
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
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
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
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
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
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
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
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
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
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Reservar</a>
      </div>
    </div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
            <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
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

  </body>

</html>
