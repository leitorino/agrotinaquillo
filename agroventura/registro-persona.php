<?php

    include("bd/conexion.php");
    include("bd/vpersona.php");


            if(isset($_POST['usuario'])){
             $usuario =$_POST["usuario"];
            }else{
                $usuario="";
            }
            
            if(isset($_POST['clave'])){
             $clave =$_POST["clave"];
            }else{
                $clave="";
            }

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
            
            $sql= "INSERT INTO `persona` ( `usuario`, `clave`, `nombre`, `apellidos`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`) VALUES ('$usuario', '$clave', '$nombre', '$apellidos', '$tipdoc', '$numdoc', '$direccion', '$telefono', '$email');";

            if (mysqli_query($link, $sql)) {
                header('Location: index.php?el=2');;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
?>