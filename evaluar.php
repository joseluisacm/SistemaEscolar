<?php
include ('conexion.php');
$user=$_REQUEST['usuario'];
$pswr=$_REQUEST['psw'];
$band= 0;
	if ($band==0)
	{
$sql="SELECT * FROM usuarios WHERE Usuario='$user'"; 
$valor = mysql_query($sql) or die ("Error de consulta usuario");
		$filas = mysql_num_rows($valor);
		if ($filas==0)
		{
			echo "<center>El usuario no existe</center><br><br>";
			$band=1;
		}
	}
	if ($band==0)
	{
		$sql="SELECT * FROM usuarios WHERE Usuario='$user'";
		$valor = mysql_query($sql) or die ("Error de consulta usuario");
		$contra= mysql_result($valor,0,'Password');
		if ($contra!=$pswr)
		{
		echo "<center>El password no es correcto</center><br><br>";
		$band=1;
		}
	}
	if ($band==0)
	   {
		$sql="SELECT * FROM usuarios WHERE Usuario='$user'";
		$valor = mysql_query($sql) or die ("Error de consulta usuario");
		$activo= mysql_result($valor,0,'Estatus');
		if ($activo!='1')
		{
			echo "<center>El usuario no es un usuario activo</center><br><br>";
			$band=1;
		}
	}
	if ($band==0)
	{
		$sql="SELECT * FROM usuarios WHERE Usuario='$user'";
		$valor = mysql_query($sql) or die ("Error de consulta usuario");
		$tipo= mysql_result($valor,0,'Nivel');
		if ($tipo=='1')
		{
			$url="accesoadmin.php?user=$user";
			echo "<script>window.location='$url';</script>";
			//header ("Location:accesoadmin.php?user=$usuario");
			//exit; 
		}
		else
		{
			if ($tipo=='2')
			{
				$url="accesouser.php?user=$user";
				echo "<script>window.location='$url';</script>";
				//header ("Location:accesouser.php?user=$usuario");
				//exit; 
			}
		}
	}
	
?>