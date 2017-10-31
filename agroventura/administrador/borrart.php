<?php

include("../bd/conexion.php");
error_reporting(0);
$id = $_GET['id'];

$sql= "DELETE FROM `trabajor` WHERE `idpersona` = $id";
$result = mysqli_query($link, $sql);

header("Location: administrador.php");

?>