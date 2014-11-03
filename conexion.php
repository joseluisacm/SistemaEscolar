<?php

$hostname="localhost";
$user="root";
$password="";
$database="base1";
$conexion=mysql_connect($hostname,$user,$password);
$mibase=mysql_select_db($database,$conexion);

?>