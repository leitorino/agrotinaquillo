<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="foto/logo_agro.png">
	
	<title>Reserva</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Icons -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/kkk.css" rel="stylesheet">
   <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1 titulo  " >
				<h1 class="site-title"><a href="index.html"> Agroaventuras CA</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item my-3"><a class="nav-link " href="#" ><em class="fa fa-dashboard"></em> Tablero</a></li>
					<li class="nav-item my-3"><a class="nav-link active" href="#" ><em class="fa fa-calendar-o"></em> Realizar reserva </a></li>
					<li class="nav-item my-3"><a class="nav-link" href="#"><em class="fa fa-bar-chart"></em> Realizar pago </a></li>
					
					<li class="nav-item my-3"><a class="nav-link " href="#perfil" role="tab" data-toggle="tab"><em class="fa fa-clone"></em> Perfil  <span class="sr-only">(current)</span></a></li>
				</ul>
				
				</nav>
			
	    <div class="main-panel col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4 ml-auto ">
			<div role="tabpanel" class="tab-pane " id="perfil"></div>
            <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row  mx-auto ">
	                    <div class="col-md-8">
	                        <div class="card ">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Reserva </h4>
									<p class="category">Realiza tu reserva</p>
	                            </div>
	                             <div class="card-content table-responsive">
	                                
                               <form>
	                                    <div class="row align-items-center">
	                                        <div class="col-md-4  text-center">
												<div class="form-group ">
													<label class="control-label">Nombre de usuario(deshabilitado)</label>
													<input id="usuario" type="text" class="form-control my-3" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4 text-center">
	                                       <label class="control-label ">Fecha de Reserva</label>
											<div class="input-group date f-date my-3">
                                             
                                              <input id="fecha-reserva" type="text" class="form-control "><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            
	                                        </div>
                                            </div>      
	                                  </div>
                                     <div class="row my-2 ">
	                                        <div class="col-md-4 text-center">
	                                        <label class="control-label">Fecha de Ingreso</label>
											<div class="input-group date f-date my-3">
                                             
                                              <input id="fecha-ingreso" type="text" class="form-control "><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
	                                        </div>
	                                        <div class="col-md-4 text-center">
	                                        <label class="control-label">Fecha de salida</label>
												<div class="input-group date f-date my-3">
                                              <input id="fecha-salida" type="text" class="form-control "><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
	                                        </div>
	                                    </div>
                                     </form>
                                     
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>
                </div>
</section>
        
	        <footer class="footer p-0">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Inicio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Cerrar Sesión
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <a href="#!">Agroaventuras C.A.</a>
	                </p>
	            </div>
	        </footer>
            </section>
	    </div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
