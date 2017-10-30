<?php

$url="127.0.0.1";
$user="root";
$pass="";
$link = mysqli_connect($url, $user, $pass, 'agrotinaquillo')or die('No se pudo conectar: ' . mysql_error());
mysqli_select_db($link, 'si') or die('No se pudo seleccionar la base de datos');

?>