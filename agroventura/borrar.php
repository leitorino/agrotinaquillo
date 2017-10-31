<?php

include("bd/conexion.php");
error_reporting(0);
$id = $_GET['id'];


$sql2= "SELECT * FROM `pago` WHERE `idpago` = '$id'";
$result2 = mysqli_query($link, $sql2);
$row2 = mysqli_fetch_array($result2);
$sql= "DELETE FROM `pago` WHERE `pago`.`idpago` = $id";
$result = mysqli_query($link, $sql);
$sql= "DELETE FROM `reserva` WHERE `reserva`.`idreserva` = $row2[1]";
$result = mysqli_query($link, $sql);

header("Location: trabajador/confirmar.php");

?>