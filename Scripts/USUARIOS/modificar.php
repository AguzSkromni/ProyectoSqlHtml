<!DOCTYPE html >
<html  lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("paginas/conexion.php");


		
		$consulta = mysql_query("SELECT * FROM usuarios", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="1">
            <tr>
				<td>USUARIO</td>
				<td>PASSWORD</td>
                <td>ACCION</td>
			  </tr>
<?php
		
		while($filas = mysql_fetch_array($consulta))
		{	
			$IDu=$filas['Id_Usuario'];
			$user=$filas['Usuario'];
			$pass=$filas['Password'];
			
?>
			  <tr>
				<td><?php echo "<p style='color:#666;'>".$user."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$pass."</p>";?></td>
                <td><a href="modificar_usuario.php?ID=<?php echo $IDu;?>">modificar</a></td>
			  </tr>
<?php
			
			
		}


?>
</table>
<br />
<a href="index.php">Regresar</a>

</body>
</html>