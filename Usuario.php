<?php
require ('conexion.php');
class Usuario {

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contraseña;
    private $Nivel;
    private $Estatus;

    public function createUsuario($nombre,$apellidop, $apellidom, $nivel){
   //echo "<br>createUsuario";

    $insert01="INSERT INTO usuarios (Nombre,ApellidoPaterno,ApellidoMaterno,Nivel,Estatus)
    VALUES ('$nombre','$apellidop','$apellidom','$nivel',1)";
        $execute01=mysql_query($insert01)or die ("Error $insert01");

}

    public function readUsuarioG() {
       // echo "<br>readUsuarioG";
echo "<br>";
     $sql = "SELECT * FROM usuarios WHERE estatus = 1 ORDER BY ApellidoPaterno ASC";
        $result = mysql_query($sql) or die ("Error $sql");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan='5' align='center'><strong>Lista de Usuario". "</tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while ($field= mysql_fetch_array($result)){
            $this->Id = $field ['Id'];
            $this->Nombre =($field ['Nombre']);
            $this->ApellidoPaterno = ($field ['ApellidoPaterno']);
            $this->ApellidoMaterno = ($field ['ApellidoMaterno']);
            $this->Nivel = $field ['Nivel'];
switch ($this->Nivel){
    case 1:
        $type="Administrador";
        break;
    case 2:
        $type="Maestro";
        break;
    case 3:
        $type="Alumno";
        break;
}
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td>
           <td>$type</td></tr>";
        }
            echo "</table></div>";

    }


    public function readUsuarioS($Id) {
    //echo "<br>readUsuarioS";
        echo"<br>";
        $sql = "SELECT * FROM usuarios WHERE estatus = 1 AND Id=$Id ORDER BY ApellidoPaterno ASC";
        $result = mysql_query($sql) or die ("Error $sql");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan='5' align='center'><strong>Consulta de Usuarios por ID". "</tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while ($field= mysql_fetch_array($result)){
            $this->Id = $field ['Id'];
            $this->Nombre =($field ['Nombre']);
            $this->ApellidoPaterno = ($field ['ApellidoPaterno']);
            $this->ApellidoMaterno = ($field ['ApellidoMaterno']);
            $this->Nivel = ($field ['Nivel']);
            switch ($this->Nivel){
                case 1:
                    $type="Administrador";
                    break;
                case 2:
                    $type="Maestro";
                    break;
                case 3:
                    $type="Alumno";
                    break;
            }
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td>
           <td>$type</td></tr>";


            echo "</table></div>";


  }
    }

    public function updateUsuario($idm, $nombre,$apellidop, $apellidom, $nivel){
        //echo "<br>updateUsuario";

        $update01="UPDATE usuarios SET Nombre='$nombre', ApellidoPaterno='$apellidop', ApellidoMaterno='$apellidom', Nivel='$nivel' WHERE Id=$idm";
        $execute02=mysql_query($update01)or die ("Error $update01");


    }

    public function deleteUsuario($id){
        //echo "<br>deleteUsuario";

        $delete01="DELETE FROM usuarios WHERE Id=$id";
        $execute02=mysql_query($delete01)or die ("Error $delete01");
    }
}

?>