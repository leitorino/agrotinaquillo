<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="foto/logo_agro.png">
	
	<title>tablero</title>

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
   
    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1 titulo  " >
				<h1 class="site-title"><a href="index.html"> Agroaventuras CA</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item my-3"><a class="nav-link active" href="#" ><em class="fa fa-dashboard"></em> Tablero</a></li>
					<li class="nav-item my-3"><a class="nav-link" href="#" ><em class="fa fa-calendar-o"></em> Realizar reserva </a></li>
					<li class="nav-item my-3"><a class="nav-link" href="#"><em class="fa fa-bar-chart"></em> Realizar pago </a></li>
					
					<li class="nav-item my-3"><a class="nav-link " href="#perfil" role="tab" data-toggle="tab"><em class="fa fa-clone"></em> Perfil  <span class="sr-only">(current)</span></a></li>
				</ul>
				
				</nav>
			
	    <div class="main-panel col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4 ml-auto ">
			<div role="tabpanel" class="tab-pane " id="perfil">
			    
			</div>
            <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Reservas </h4>
									<p class="category">Verifica el estado de tus reservas</p>
	                            </div>
	                             <div class="card-content table-responsive">
	                                <table class="table" id="tabla-reserva">
	                                    <thead class="text-primary">
	                                    	<th id="id">ID</th>
	                                    	<th id="fecha_reserva">Fecha Reserva</th>
	                                    	<th id="fecha_ingreso">Fecha De ingreso</th>
											<th id="fecha_salida">Fecha Salida</th>
                                            <th id="total_pagar">Total Pagar</th>
                                            <th id="estado">Estado </th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>01</td>
	                                        	<td>Dakota Rice</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
												<td class="text-primary">$36,738</td>
	                                        </tr>
	                                        <tr>
	                                            <td>02</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">$23,789</td>
	                                        </tr>
	                                        <tr>
	                                            <td>03</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Netherlands</td>
	                                        	<td>Baileux</td>
												<td class="text-primary">$56,142</td>
	                                        </tr>
	                                        <tr>
	                                            <td>04</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Overland Park</td>
												<td class="text-primary">$38,735</td>
	                                        </tr>
	                                        <tr>
	                                            <td>05</td>
	                                        	<td>Doris Greene</td>
	                                        	<td>Malawi</td>
	                                        	<td>Feldkirchen in Kärnten</td>
												<td class="text-primary">$63,542</td>
	                                        </tr>
	                                        <tr>
	                                            <td>06</td>
	                                        	<td>Mason Porter</td>
	                                        	<td>Chile</td>
	                                        	<td>Gloucester</td>
												<td class="text-primary">$78,615</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

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
