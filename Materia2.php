<?php
class Materia{

    private $Id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;
    private $maestro;

    public function seleccionaMaestro(){
        echo"<div class=table-responsive>";
        echo"<form action=ajax2.php method=POST name=maestro id=maestro target='_self'>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td>Maestro: </td><td><select name=idmae>";
        $sql02 = "SELECT * FROM usuarios WHERE Estatus = 1 AND Nivel = 2 ORDER BY ApellidoPaterno";
        $result02 = mysql_query($sql02)or die("Error $sql02");
        while($field = mysql_fetch_array($result02)){
            $id_maestro = $field['Id'];
            $opcion= ($field['Id'].") ".$field['ApellidoPaterno']." ".$field['ApellidoMaterno']." ".$field['Nombre']);
            echo "<option value=$id_maestro>$opcion</option>";
        }
        echo "</select></td></tr>";
        echo "<tr><td colspan=2 align=center><input type=submit id=submit value=Seleccionar></td></tr>";
        echo "</table>";
        echo "</form>";
        echo "</div>";

    }

    public function datosMaestro($id_maestro){
        $sql4 = "SELECT * FROM usuarios WHERE  Id = $id_maestro" ;
        $result4 = mysql_query($sql4) or die ("No se ejecuta la consulta $sql4");
        $existe = mysql_num_rows($result4);
        if ($existe > 0){
            $nombre = $id_maestro.") ";
            $nombre .= mysql_result($result4, 0, 'ApellidoPaterno');
            $nombre .= " ". mysql_result($result4, 0, 'ApellidoMaterno');
            $nombre .= " ". mysql_result($result4, 0, 'Nombre');
            $nombre=$nombre;
            echo "<br>Maestro Seleccionado: <strong>".$nombre."</strong>";
        }
    }
    public function  materiasAsignadas ($id_maestro){
        echo "<br><br>";
        $sql5="SELECT m.nombre, m.id_materia FROM maestro_materia AS mm, materia AS m, usuarios AS u
        WHERE m.id_materia=mm.id_materia AND u.Id=mm.Id AND u.Id=$id_maestro AND m.estatus=1";
        $result5 = mysql_query($sql5) or die ("No se ejecuta la consulta $sql5");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><th>Materia</th></tr>";
        while ($field= mysql_fetch_array($result5)){
            $this->materia = $field ['nombre'];
            $this->id_materia = $field ['id_materia'];
            echo "<tr><td>$this->materia</td></tr>";

        }
        echo "</table></div>";


    }
}
?>