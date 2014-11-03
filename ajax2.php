<?php
require ('Materia2.php');
require ('conexion.php');
require ('header.php');
require ('menu_aux.php');
echo "<br><br><br>";
$materia =new Materia();
$id_maestro = $_POST['idmae'];
$materia->datosMaestro($id_maestro);
$materia->materiasAsignadas($id_maestro);
require ('footer.php')

?>