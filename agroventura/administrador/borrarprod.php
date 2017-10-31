<?php

include("../bd/conexion.php");
error_reporting(0);
$id = $_GET['id'];

$sql= "DELETE FROM `producto` WHERE `idproducto` = $id";
$result = mysqli_query($link, $sql);

header("Location: producto.php");

?>