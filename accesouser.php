<?php
$user=$_GET['user'];
setcookie('usuariologin',$user);
setcookie('tipouser','Auxiliar');
setcookie('acceso','2');
include ('conexion.php');
header ("Location:index_aux.php");
exit;
?>