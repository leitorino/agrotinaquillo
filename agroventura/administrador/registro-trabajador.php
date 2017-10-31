<?php

    include("../bd/conexion.php");


            if(isset($_POST['usuario'])){
             $usuario =$_POST["usuario"];
            }else{
                $usuario="";
            }
            
            if(isset($_POST['codigo'])){
             $codigo =$_POST["codigo"];
            }else{
                $codigo="";
            }

            if(isset($_POST['rango'])){
             $rango =$_POST["rango"];
            }else{
                $rango="";
            }

            if(isset($_POST['estado'])){
             $estado =$_POST['estado'];
            }else{
                $estado="";
            }

            $sql2= "SELECT * FROM `persona` WHERE `usuario` = '$usuario'";
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_array($result2);

            
            $sql= "INSERT INTO `trabajor` ( `idpersona`, `estado`, `rango`, `codigo`) VALUES ('$row2[0]', '$estado', '$rango', '$codigo');";

            if (mysqli_query($link, $sql)) {
                header('Location: administrador.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
?>