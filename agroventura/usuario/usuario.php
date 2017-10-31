<?php 

    session_start();

    if(!isset($_SESSION["usuarioc"])){
        
        header('Location: ../index.php');
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="../foto/logo_agro.png">
	
	<title>Perfil de usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
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
					<li class="nav-item my-3"><a class="nav-link" href="tablero.php" ><em class="fa fa-dashboard"></em> Tablero</a></li>
					<li class="nav-item my-3"><a class="nav-link" href="reserva.php" ><em class="fa fa-calendar-o"></em> Realizar reserva </a></li>
					<li class="nav-item my-3"><a class="nav-link active" href="#" ><em class="fa fa-user"></em>Perfil </a></li>
					
					
					
				</ul>
				
				</nav>
			
	    <div class="main-panel col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4 ml-auto ">
			<div role="tabpanel" class="tab-pane " id="perfil"></div>
            <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Editar perfil </h4>
									<p class="category">Complete su  perfil</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	                                    <div class="row my-4">
	                                        <div class="col-md-5">
												
                                        <div class="form-group group ">
													<input type="text" class="input2 " id="usuario-r"  maxlength="25"value="<?php echo' '.$_SESSION["usuarioc"].' ';?>" disabled>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre de usuario (deshabilitado)</label>

												</div>
	                                        </div>
	                                        <div class="col-md-3">
												
                                     <div class="form-group group ">
													<input type="email" class="input2  " id="email-r" name="email"  maxlength="20" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">correo</label>

												</div>
                                      </div>
                                       <div class="col-md-4">
                                        <div class="form-group group ">
													<input type="text" class="input2 val-numero " id="telefono-r" name="telefono"  maxlength="20" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Teléfono</label>

												</div>
	                                        
                                            </div>
	                                       
	                                    </div>
                                         <div class="row">
	                                        <div class="col-md-6">
												
                                              
                                              <div class="form-group  group my-2">

                                                <select class="form-control input2" id="tipodoc-r" name="tipdoc">
                                                  <option value="1">Cedula</option>
                                                  <option value="2">Rif</option>
                                                  <option value="3">Pasaporte</option>

                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                 <label class="label2">Tipo de Documento</label>
                                              </div>
                                              
	                                        </div>
	                                        <div class="col-md-6">
												
                                        <div class="form-group group ">
													<input type="text" class="input2 val-numero " id="numdoc-r" name="numdoc"  maxlength="30" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Número de Documento</label>

												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
												
                                        <div class="form-group group ">
													<input type="text" class="input2  " id="nombre-r" name="nombre"  maxlength="30" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre</label>

												</div>
	                                        </div>
	                                        <div class="col-md-6">
												
                                        <div class="form-group group ">
													<input type="text" class="input2 val-letras " id="apellido-r" name="apellidos"  maxlength="30" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Apellidos</label>

												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												
	                                        <div class="form-group group ">
													<input type="text" class="input2  " id="direccion-r" name="direccion"  maxlength="40" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Dirección</label>

												</div>
	                                    </div>
                                        </div>
	                                    <input type="submit" class="btn  pull-right color-verde titulo" value="Actualizar Perfil" name="actualizar">
	                                    <div class="clearfix"></div>
	                                </form>
                                    <?php
                                        
    
    include("../bd/conexion.php");
    include("../bd/vpersona.php");
    //error_reporting(0);
                                    
        if (isset($_POST['actualizar'])) {
                                       
             $usuario=$_SESSION["usuarioc"];                             

            if(isset($_POST['nombre'])){
             $nombre =$_POST["nombre"];
            }else{
                $nombre="";
            }

            if(isset($_POST['apellidos'])){
             $apellidos =$_POST['apellidos'];
            }else{
                $apellidos="";
            }

            if(isset($_POST['tipdoc'])){
             $tipdoc =$_POST["tipdoc"];
            }else{
                $tipdoc="";
            }
            if(isset($_POST['numdoc'])){
             $numdoc =$_POST['numdoc'];
            }else{
                $numdoc="";
            } 

            if(isset($_POST['direccion'])){
             $direccion =$_POST["direccion"];
            }else{
                $direccion="";
            }
            if(isset($_POST['telefono'])){
             $telefono =$_POST['telefono'];
            }else{
                $telefono="";
            } 

            if(isset($_POST['email'])){
             $email =$_POST['email'];
            }else{
                $email="";
            } 


            $sql= "SELECT * FROM `persona` WHERE `usuario` = '$usuario'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result);
            $persona = new vpersona($row[0],$row[1],$row[2],$nombre,$apellidos,$tipdoc,$numdoc,$direccion,$telefono,$email);
            $sql2= "UPDATE `persona` SET `nombre` = '$nombre', `apellidos` = '$apellidos', `tipo_documento` = '$tipdoc', `num_documento` = '$numdoc', `direccion` = '$direccion', `telefono` = '$telefono', `email` = '$email' WHERE `persona`.`idpersona` = 1;";
            if($result2= mysqli_query($link, $sql2)){
                echo'<script>alert("Datos Actualizados");</script>';
            }
            
        }

                                    ?>
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
	                            <a href="../index.php">
	                                Inicio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="../cerrar.php">
	                                Cerrar Sesión
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
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    
    
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
