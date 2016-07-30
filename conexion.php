<?php

/*$usario="root";
$passwd="alex";
$servidor="localhost";
$BD="serviciosLibres";

$usario="u253135181_movil";
$passwd="drag0n";
$servidor="mysql.hostinger.mx";
$BD="u253135181_servi";
*/

$usario="u570922444_xfile";
$passwd="bd2016";
$servidor="mysql.hostinger.mx";
$BD="u570922444_pc";

$conexion=mysqli_connect($servidor,$usario,$passwd, $BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
