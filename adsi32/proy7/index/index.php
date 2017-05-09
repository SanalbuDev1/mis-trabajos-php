<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="registro.php">Registrar</a>

<style>
	table{
		box-shadow: 0px 0px 10px black;
		margin:20px auto;

	}
	td{
		margin-left:40px;
		border:2px solid black;
	}
</style>
	<table>
	<tr>
		<td>Cedula</td><td>nombre del afiliado</td><td>Alquiler cabaña</td><td>noches de estadia</td><td>fecha de ingreso</td><td>tipo pago</td><td>acciones</td>
	</tr>
	<?php 
		$con = mysqli_connect("localhost","root","","proy7");
		$query = mysqli_query($con , "SELECT * FROM alquiler");
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['nombre']."</td>
			<td>".$row['alquiler1']."</td>
			<td>".$row['noches']."</td>
			<td>".$row['date1']."</td>
			<td>".$row['pago']."</td>
			<td>
						<a href='modificar.php?id=".$row['id']."'>modificar</a>
						<a href='eliminar.php?id=".$row['id']."'>eliminar</a>
						<a href='registro.php?id=".$row['id']."'>añadir</a>

						
			</td>



			</tr>";
		}
	 ?>
	 	
	 </table>
</body>
</html>