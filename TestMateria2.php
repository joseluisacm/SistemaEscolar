<?php
require ('Materia2.php');
require ('conexion.php');
require ('header.php');
require ('menu_aux.php');

echo "<br><br><br>";

$materia = new Materia();

if(isset($_REQUEST['maestro'])){
    $id = $_REQUEST['maestro'];
}else{
    $id = 0;
}
if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];
}else{
    $accion = 0;
}
if(isset($_REQUEST['materia'])){
    $id_materia = $_REQUEST['materia'];
}else{
    $id_materia = 0;
}
switch($accion){
    case 0:
        $materia->seleccionaMaestro($id);
        break;
}
require ("footer.php");

?>