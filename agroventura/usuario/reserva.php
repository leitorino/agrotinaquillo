<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<link rel="icon" href="../foto/logo_agro.png">

<title>Reserva</title>

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
<li class="nav-item my-3"><a class="nav-link " href="tablero.php" ><em class="fa fa-dashboard"></em> Tablero</a></li>
<li class="nav-item my-3"><a class="nav-link active" href="reserva.php" ><em class="fa fa-calendar-o"></em> Realizar reserva </a></li>
<li class="nav-item my-3"><a class="nav-link" href="Pago.php"><em class="fa fa-bar-chart"></em> Realizar pago </a></li>
<li class="nav-item my-3"><a class="nav-link " href="usuario.php" role="tab" data-toggle="tab"><em class="fa fa-clone"></em> Perfil  <span class="sr-only">(current)</span></a></li>


</ul>

</nav>

    <div class="main-panel col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4 ml-auto ">

   <!-- modal registro-->
   <div class="modal fade" id="consumo_entrada" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <h4 class="title">Entrada </h4>
      <p class="category">Complete los campos</p>
                  </div>
                  <div class="card-content">
                      <form>
                          <div class="row my-4">
                              <div class="col-md-4">

            <div class="form-group group ">
              <input type="text" class="input2 val-numero" id="general-r" maxlength="4" required >
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">General</label>

            </div>
                              </div>
                              <div class="col-md-4">

            <div class="form-group group ">
              <input type="text" class="input2 val-numero" id="niño-r" maxlength="4" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Niños</label>

            </div>
                              </div>
                              <div class="col-md-4">

            <div class="form-group group ">
              <input type="text" class="input2 val-numero" id="tercera_edad-r" maxlength="4" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Tercera edad</label>

            </div>
                              </div>

                          </div>
                             <div class="row">
                              <div class="col-md-5">

                                   <div class="form-group  group my-2">

                                                           <select class="form-control input2" id="t-precio-r">
                                                             <option value="1">subelo</option>
                                                             <option value="2">subelo</option>
                                                             

                                                           </select>
                                                           <span class="highlight"></span>
                                                           <span class="bar"></span>
                                                            <label class="label2">Tipo precio </label>
                                                         </div>
                              </div>
                              <div class="col-md-5">
<div class="form-group  group my-2">

                                                           <select class="form-control input2" id="t-caney-r">
                                                             <option value="1">subelo</option>
                                                             <option value="2">subelo</option>
                                                             

                                                           </select>
                                                           <span class="highlight"></span>
                                                           <span class="bar"></span>
                                                            <label class="label2">Tipo Caney </label>
                                                         </div>
                              </div>
                              
                          </div>
                          <div class="row">
                              <div class="col-md-5">

            <div class="form-group group  my-3">
              <input type="text" class="input2 val-numero" id="t-pagar-r" maxlength="20" required>
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label class="label2">Total Ppagar</label>

            </div>
                              </div>
                              <div class="col-md-5">
<div class="form-group  group my-4">

                                                           <select class="form-control input2" id="t-caney-r">
                                                             <option value="1">Activo</option>
                                                             <option value="2">No Disponible</option>
                                                             

                                                           </select>
                                                           <span class="highlight"></span>
                                                           <span class="bar"></span>
                                                            <label class="label2">Estado </label>
                                                         </div>
                              </div>
                          </div>

                          
                         


                          <button type="submit" class="btn  pull-right color-verde titulo" data-dismiss="modal" data-toggle="modal" data-target="#consumo_producto">Siguiente</button>
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
    <div id="nuevo-trabajador"class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
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
                                <h4 class="title">Reserva</h4>
<p class="category">Registro de nueva reserva</p>
                            </div>
                            <div class="card-content">
                                <form>

                                        <div class="row my-2">

                                         <div class="col-md-12">
<div class="form-group group ">
<input type="text" class="input2 val-letras"maxlength="35" id="nombre-r" disabled>
                                                      <span class="highlight"></span>
                                                      <span class="bar"></span>
                                                      <label class="label2">Nombre de usuario</label>

</div>
                                        </div>
                                    </div>
                                         <div class="row my-2">

                                        <div class="col-md-12">
<div class="form-group group ">
   
<label class="label3 my-3">Fecha de reserva</label>
<div class="input-group date f-date ">
                                              
<input disabled id="fecha-salida" type="text" class="form-control " min="2017-10-31" value="2017/10/31"><span class="input-group-addon glyphicon glyphicon-calendar"><i class="glyphicon fa fa-search"></i></span>

</div>
                                                   

</div>
                                        </div>
                                    </div>
                                    <div class="row my-2">

                                        <div class="col-md-12">
<div class="form-group group ">
<label class="label3 my-3">Fecha de entrada</label>
<div class="input-group date f-date ">
 
<input required id="fecha-salida" type="text" class="form-control " min="2017-10-31" value="2017/10/31"><span class="input-group-addon glyphicon glyphicon-calendar"><i class="glyphicon fa fa-search"></i></span>
                                          </div>
                                                     
                                                     

</div>
                                        </div>
                                    </div>
                                    <div class="row my-4">

                                        <div class="col-md-12">
<div class="form-group  group">

                                                <select class="form-control input2" id="estado-r">
                                                  <option value="1">Activo</option>
                                                  <option value="2">Anulada</option>
                                                  <option value="2">Por pagar</option>

                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                 <label class="label2">Estado</label>
                                              </div>
                                        </div>
                                    </div>




                                    <button id="registrar" type="submit" class="btn  pull-right color-verde titulo"data-dismiss="modal" data-toggle="modal" data-target="#consumo_entrada">Siguiente</button>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Reserva </h4>
<p class="category">Lista de reservas</p>
                            </div>
                             <div class="card-content table-responsive">
                                <table class="table" id="tabla-trabajador">
                                    <thead class="text-primary">


                                    
<th id="id">ID</th>
                                    
<th id="freserva">Fecha Reserva </th>
                                    
<th id="fingreso">Fecha Ingreso</th>
                                    
<th id="total">Total</th>
                                    
<th id="estado">Estado</th>
<th id="opciones"></th>
                                    </thead>
                                    <tbody><div>
                                        <tr>

                                                <td>01</td>
                                        <td>Dakota Rice</td>
                                        <td>Niger</td>
                                        <td>Oud-Turnhout</td>
<td class="text-primary">$36,738</td>

                                        <td class="td-actions text-right">
<a href="#" ><i title="Editar" class="fa fa-pencil" style="color:green" aria-hidden="true"></i></a>
                                                <a href="#" ><i title="Eliminar" class="fa fa-times mx-3 " style="color:red" aria-hidden="true"></i></a>

</td>
                                        </tr>
                                        <tr>

                                                 <td>02</td>
                                        <td>Minerva Hooper</td>
                                        <td>Curaçao</td>
                                        <td>Sinaai-Waas</td>
<td class="text-primary">$23,789</td>

                                        <td class="td-actions text-right">
<a href="#" ><i title="Editar" class="fa fa-pencil" style="color:green" aria-hidden="true"></i></a>
                                                <a href="#" ><i title="Eliminar" class="fa fa-times mx-3 " style="color:red" aria-hidden="true"></i></a>

</td>
                                        </tr>
                                       </div>
                                    </tbody>
                                </table>

                                 <div class="row my-3">
                                        <div class="col-md-4"></div>
                                    <div class="col-md-3">
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
                            <a href="#">
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
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

  </body>
</html>