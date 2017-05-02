<?php 
	require "../conexion.php";
	require "../public/header.php";

	if($_GET){

		$id = $_GET['id'];
		$consultar = mysqli_query($conex, "SELECT * FROM usuarios WHERE id = $id");
		$row = mysqli_fetch_array($consultar);
	}
?>

	<h1>Consultar Usuarios</h1>
	<a href="index.php">Volver</a>
	<hr>
	<table border="1">
		<tr>
			<td>Nombres</td>
			<td><?php echo $row['nombres']; ?></td>
		</tr>
		<tr>
			<td>Apellidos</td>
			<td><?php echo $row['apellidos']; ?></td>
		</tr>
		<tr>
			<td>Correo</td>
			<td><?php echo $row['correo']; ?></td>
		</tr>
		<tr>
			<td>Celular</td>
			<td><?php echo $row['celular']; ?></td>
		</tr>
		<tr>
			<td>Genero</td>
			<td><?php echo $row['genero']; ?></td>
		</tr>
		<tr>
			<td>Tipo_documento</td>
			<td><?php echo $row['tipo_documento']; ?></td>
		</tr>
		<tr>
			<td>Documento</td>
			<td><?php echo $row['documento']; ?></td>
		</tr>

	</table>