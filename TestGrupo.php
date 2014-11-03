<?php
require('Grupo.php');
require_once('conexion.php');
require('header.php');
require('menu.php');
$grupo = new Grupo();
if(isset($_REQUEST['alumno'])){
$id = $_REQUEST['alumno'];
}else{
$id = 0;
}
if(isset($_REQUEST['accion'])){
$accion = $_REQUEST['accion'];
}else{
$accion = 0;
}
if(isset($_REQUEST['grupo'])){
$id_grupo = $_REQUEST['grupo'];
}else{
$id_grupo = 0;
}

switch($accion){
case 0:
$grupo->seleccionaAlumno($id);
break;
case 1:
echo"<div class=\"alert alert-danger\" role=alert>";
echo"Alumno(s) asignado";
echo"</div>";
$grupo->createGrupoAlumno($id_grupo,$id);
$grupo->seleccionaAlumno($id);
break;
case 2:
echo"<div class=\"alert alert-info\" role=alert>";
echo"Alumno desasignado";
echo"</div>";
$grupo->deleteGrupoAlumno($id_grupo,$id);
$grupo->seleccionaAlumno($id);
break;
}
require('footer.php');

?>