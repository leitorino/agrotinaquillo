<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="../foto/logo_agro.png">

	<title>Trabajador</title>

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
					<li class="nav-item my-3"><a class="nav-link" href="producto.php" ><em class="fa fa-cutlery"></em> Control de productos</a></li>
					<li class="nav-item my-3"><a class="nav-link active" href="#trabajador" role="tab" data-toggle="tab"><em class="fa fa-user"></em> Trabajador </a></li>
					<li class="nav-item my-3"><a class="nav-link" href="entrada.php" ><em class="fa fa-calendar-o"></em> Control de entradas </a></li>
					<li class="nav-item my-3"><a class="nav-link" href="caney.php"><em class="fa  fa-home "></em> Control Caney </a></li>


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
      <div class="modal-body m-0 p-0">
       <section class="my-3">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Trabajador</h4>
									<p class="category">Registro nuevo trabajador</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post">
	                                    <div class="row my-3">

	                                        <div class="col-md-5">
												<div class="form-group group ">
													<input type="text" class="input2 val-letras" id="usuario-r"  maxlength="25" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre de usuario</label>

												</div>
	                                        </div>
	                                       <div class="col-md-3">
												<div class="form-group group ">
													<input type="email" class="input2" id="correo-r" maxlength="60"  required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Correo</label>

												</div>
	                                        </div>


	                                        <div class="col-md-4">
												<div class="form-group group ">
													<input type="text" class="input2  val-numero"  id="telefono-r" maxlength="20" required >
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">teléfono</label>


												</div>
	                                        </div>
	                                    </div>
                                        <div class="row my-5">
                                        <div class="col-md-5">
												<div class="form-group group ">
													<input type="password" class="input2" id="contraseña-r" minlength="8" maxlength="49" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Contraseña</label>

												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group group ">
													<input type="text" class="input2 val-numero" id="codigo-r" maxlength="10" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">codigo</label>

												</div>
	                                        </div>
	                                        <div class="col-md-4 my-2">
												<div class="form-group  group">

                                                <select class="form-control input2" id="estado-r">
                                                  <option>Activo</option>
                                                  <option>Inactivo</option>

                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                 <label class="label2">Estado</label>
                                              </div>
                                             </div>
	                                    </div>
                                         <div class="row">
	                                        <div class="col-md-6 my-2">
												<div class="form-group group">

                                                <select class="input2" id="t-documento-r">
                                                  <option>Cédula</option>
                                                  <option>Rif</option>
                                                  <option>Pasaporte</option>
                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                 <label class="label2">Tipo de documeto</label>
                                              </div>
	                                        </div>

	                                        <div class="col-md-6">
												<div class="form-group group ">
													<input type="text" class="input2 val-numero" id="n-documento-r" maxlength="25" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Numero de documento</label>

												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row my-5">

	                                        <div class="col-md-6">
												<div class="form-group group ">
													<input type="text" class="input2" id="nombre-r" maxlength="25" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre</label>

												</div>
	                                        </div>

	                                        <div class="col-md-6">
												<div class="form-group group ">
													<input type="test" class="input2" id="apellidos-r" maxlength="25" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Apellidos</label>

												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">

	                                        <div class="col-md-8">
												<div class="form-group group ">
													<input type="text" class="input2" id="direccion-r" maxlength="80" required>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Dirección</label>

												</div>
	                                        </div>
	                                         <div class="col-md-4 my-2">
												<div class="form-group group">

                                                <select class="input2" id="estado-r">
                                                  <option>vendedor</option>
                                                  <option>administrador</option>

                                                </select>
                                                 <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                <label class="label2">Rango</label>
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
	                                <h4 class="title">Trabajador </h4>
									<p class="category">Datos de Trabajadores</p>
	                            </div>
	                             <div class="card-content table-responsive">
	                                <table class="table" id="tabla-trabajador">
	                                    <thead class="text-primary">


	                                    	<th id="id">ID</th>
	                                    	<th id="usuario-tab">Nombre de usuario</th>
	                                    	<th id="nombre-tab">nombre</th>
											<th id="apellido-tab">apellido</th>
                                            <th id="documento-tab">numero de documento</th>
                                            <th id="estado-tab">Estado </th>
                                             <th id="codigo-tab">codigo</th>
                                             <th id="opciones"></th>
	                                    </thead>
	                                    <tbody><div>
	                                        <tr>

                                                <td>01</td>
	                                        	<td>Andrea6440</td>
	                                        	<td>andrea</td>
	                                        	<td>alvarado</td>
												<td >26.400.375</td>
                                                <td>Activo</td>
	                                        	<td>001</td>
	                                        	<td class="td-actions text-right">
												<a href="#" ><i title="Editar" class="fa fa-pencil" style="color:green" aria-hidden="true"></i></a>
                                                <a href="#" ><i title="Eliminar" class="fa fa-times mx-3 " style="color:red" aria-hidden="true"></i></a>

														</td>
	                                        </tr>
	                                        <tr>

                                                 <td>02</td>
	                                        	<td>maria124</td>
	                                        	<td>maria</td>
	                                        	<td>josefina</td>
												<td >45368934</td>
                                                <td>Activo</td>
	                                        	<td>002</td>
	                                        	<td class="td-actions text-right">
												<a href="#" ><i title="Editar" class="fa fa-pencil" style="color:green" aria-hidden="true"></i></a>
                                                <a href="#" ><i title="Eliminar" class="fa fa-times mx-3 " style="color:red" aria-hidden="true"></i></a>

														</td>
	                                        </tr>
	                                       </div>
	                                    </tbody>
	                                </table>

	                                 <div class="row my-3">
                                        <div class="col-md-5"></div>
	                                    <div class="col-md-2">
												<div class="form-group group  ">
													<input type="search" class="input2 val-letras fa fa-search" id="busqueda"  maxlength="25" placeholder="realiza tu busqueda aqui…" >
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>

                                                     <center><i class="fa fa-search" aria-hidden="true"></i></center>
												</div>
	                                        </div>
	                                        <div class="col-md-3 ml-auto">
												<div class="form-group group ">
													<button type="button" class="btn  pull-right color-verde titulo" data-toggle="modal" data-target="#nuevo-trabajador">Nuevo</button>

												</div>
	                                        </div>
	                                </div>


	                            </div>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>
</section>




	        <footer class="footer p-0  " >

	            <div class="container-fluid   ">
	                <nav class="pull-left ">
	                    <ul>
	                        <li>
	                            <a href="../index.php">
	                                Inicio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Cerrar Sesión
	                            </a>
	                        </li>

	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <a href="#">Agroaventuras C.A.</a>
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
