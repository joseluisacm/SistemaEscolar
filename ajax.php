<?php
require ('Materia.php');
require ('conexion.php');
require ('header.php');
require ('menu.php');
echo "<br><br><br>";

$materia =new Materia();
$id_maestro = $_POST['idmae'];
$materia->datosMaestro($id_maestro);
$materia->materiasAsignadas($id_maestro);
$materia->asignarMateriaMaestro($id_maestro);
require ('footer.php')

?>