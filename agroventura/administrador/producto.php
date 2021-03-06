<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="../foto/logo_agro.png">
	
	<title>Producto</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Icons -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../css/kkk.css" rel="stylesheet">
    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1 titulo  " >
				<h1 class="site-title"><a href="index.html"> Agroaventuras CA</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item my-3"><a class="nav-link active " href="#producto" ><em class="fa fa-dashboard"></em> Control de productos</a></li>
					<li class="nav-item my-3"><a class="nav-link " href="#entrada" ><em class="fa fa-calendar-o"></em> Control de entradas </a></li>
					<li class="nav-item my-3"><a class="nav-link" href="#caney"><em class="fa fa-bar-chart"></em> Control Caney </a></li>
					
					<li class="nav-item my-3"><a class="nav-link " href="#trabajador" role="tab" data-toggle="tab"><em class="fa fa-clone"></em> Trabajador  <span class="sr-only">(current)</span></a></li>
				</ul>
				
				</nav>
			
	    <div class="main-panel col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4 ml-auto ">
            
    <div id="nuevo-trabajador"class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ml-auto" > 
       
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body m-0 ">
       <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Productos</h4>
									<p class="category">Registro de nuevo producto</p>
	                            </div>
	                            <div class="card-content">
                                
	                                <form class="formulario" name="formulario-r" method="POST" action="registro-producto.php">
	                                    <div class="row my-3">
                                    <!--   <form>
    
    <div class="group">      
      <input type="text" class="input2" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label class="label2">Name</label>
    </div>
      
    <div class="group">      
      <input type="text" class="input2" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label class="label2">Email</label>
    </div>
    
  </form>-->
	                                        <div class="col-md-4">
												<div class="form-group group ">
													<input type="text" class="input2" id="nombre-r" name="nombre" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre</label>
                                                      
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group group ">
													<input type="text" class="input2" id="precio-r" name="precio" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Precio</label>
                                                      
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group group ">
													<input type="textarea" class="input2" id="id-r"  name="id" disabled>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Id (deshabilitado)</label>
                                                      
												</div>
	                                        </div>
	                                    </div>
                                        <div class="row my-5">
	                                        <div class="col-md-6">
												<div class="form-group group ">
													<input type="text" class="input2" id="descripcion-r" name="descripcion" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Descripcion</label>
                                                      
												</div>
	                                        </div>
	                                        <div class="col-md-4 my-2">
												<div class="form-group group ">
                                               
                                                <select name="estado-r" class="input2" id="estado-r" name="estado">
                                                  <option>Disponible</option>
                                                  <option>No disponible</option>
                                                 
                                                  
                                                </select>
                                                 <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                 <label for="estado-r" class="label2">Estado</label>
                                              </div>
	                                        </div>
	                                        
	                                    </div>
                                         
	                                    

	                                    
	                                   

	                                    <button id="registrar" type="submit" class="btn  pull-right color-verde titulo">Registrar</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>
</section>
        </div>
  </div>
</div>
            </div>

            <div role="tabpanel" class="tab-pane " id="trabajador"> </div>
            <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Productos </h4> 
									<p class="category">Tabla de productos a la venta</p>
	                            </div>
	                             <div class="card-content table-responsive">
                                  
	                                <table class="table" id="tabla-trabajador">
	                                    <thead class="text-primary">
	                                        
	                                    	<th id="id">ID</th>
	                                    	<th id="nombre">Nombre </th>
	                                    	<th id="descripción">Descripción</th>
											<th id="precio">Precio</th>
                                            <th id="estado"> Estado</th>
                                            
                                             
                                             <th id="opciones"></th>
	                                    </thead>
	                                    <tbody><div>
	                           
	                                        <?php
                                            
                                            include("../bd/conexion.php");
                                            
                                            $sql= "SELECT * FROM `producto`";
                                            $result = mysqli_query($link, $sql);
                                            while($row=mysqli_fetch_array($result)){
                                                echo"<tr>";
                                                    echo"<td>$row[0]</td>";
                                                    echo"<td>$row[1]</td>";
                                                    echo"<td>$row[2]</td>";
                                                    echo"<td>$row[3]</td>";
                                                    echo"<td>$row[4]</td>";
                                                    echo'<td class="td-actions text-right">';
                                                    echo'<a href="borrarprod.php?id='.$row[0].'" ><i title="Eliminar" class="fa fa-times mx-3 " style="color:red" aria-hidden="true"></i></a>';
                                                echo"</tr>";
                                            }
                                            
                                            
                                            ?>
                                            
	                                       </div>
	                                    </tbody>
	                                </table>
	                                
	                                 
	                                 <button type="button" class="btn  pull-right color-verde titulo" data-toggle="modal" data-target="#nuevo-trabajador">Nuevo</button>



                               
  
  
  
  
      
  
  

                                  
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    
    
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
