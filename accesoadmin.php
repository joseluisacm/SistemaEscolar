<?php
$user=$_GET['user']; 
setcookie('usuariologin',$user);
setcookie('tipouser','Administrador');
setcookie('acceso','1');
include ('conexion.php');
header ("Location:index_adm.php");
exit;
?>