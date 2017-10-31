<?php

    include("../bd/conexion.php");


            if(isset($_POST['nombre'])){
             $nombre =$_POST["nombre"];
            }else{
                $nombre="";
            }
            
            if(isset($_POST['precio'])){
             $precio =$_POST["precio"];
            }else{
                $precio="";
            }

            if(isset($_POST['id'])){
             $id =$_POST["id"];
            }else{
                $id="";
            }

            if(isset($_POST['descripcion'])){
             $descripcion =$_POST['descripcion'];
            }else{
                $descripcion="";
            }

            if(isset($_POST['estado'])){
             $estado =$_POST['estado'];
            }else{
                $estado="";
            }

            
            $sql= "INSERT INTO `producto` ( `nombre`, `descripcion`, `precio_venta`, `estado`) VALUES ('$nombre', '$descripcion', '$precio', '$estado');";

            if (mysqli_query($link, $sql)) {
                header('Location: producto.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
?>