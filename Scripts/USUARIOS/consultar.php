<!DOCTYPE html>
<html  lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRADOR DE ARCHICOSPHP</title>
</head>
<body>

<?php
include("paginas/conexion.php");


		
		$consulta = mysql_query("SELECT * FROM usuarios", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="1">
            <tr>
				<td>USUARIO</td>
				<td>CONTRASEÑA</td>
			  </tr>
<?php
		
		while($filas = mysql_fetch_array($consulta))
		{	
			$user=$filas['Usuario'];
			$pass=$filas['Contraseña'];
			
?>
			  <tr>
				<td><?php echo "<p style='color:#666;'>".$user."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$pass."</p>";?></td>
			  </tr>
<?php
			
			
		}


?>
</table>
<br />
<a href="index.php">Regresar</a>

</body>
</html>