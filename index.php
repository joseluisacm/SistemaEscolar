
<html>
<script type="text/javascript" src="Bootstrap/js2/jquery-1.4.2.min.js"></script><!--linea para ajax-->
<script type="text/javascript" src="Bootstrap/js2/jquery-ui-1.8.2.custom.min.js"></script>
<link href="Bootstrap/css/estilos.css" rel="stylesheet" type="text/css">
<body>

<form id='form1' name='form1' method='post' action="evaluar.php">
    <hr color="8bf52f" size=20px>
	<center><table width='350' border='0'>
	<tr><td colspan='2'><center><h3 class='b'>Ingresar al Sistema</h3></center></td></tr>
	<tr>
	<td align="left"><strong>Usuario</strong></td>
	<td align="center"><input type='txt' name='usuario'  id='usuario' class='form-input addu'><br><br></td>
	</tr>
	<tr>
	<td align="left" class="textos0"><strong>Password</strong></td>
	<td align="center"><input type='password' name='psw' id='psw' class='form-input addu'></td>
	</tr>
	<tr>
	<td colspan='2' align="center">
	<p>
	<center>
	<input type='submit' value='Accesar' class='form-btn'/>
	</center>
	</p></td>
	</tr>
	</table> </center>
</form>
<div id="ajax">&nbsp;</div>
<script type="text/javascript">
    $(function (e) {
        $('#form1').submit(function (e) {
            e.preventDefault()
            $('#ajax').load('evaluar.php?' + $('#form1').serialize())
        })
    })
</script>
</body>
</html>

<?php
      require('footer.php');

?>
