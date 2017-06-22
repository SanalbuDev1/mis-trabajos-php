<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
	<?php 

		$con = mysqli_connect("localhost","root","","php1");
		$tabla = mysqli_query($con , "SELECT * FROM php1t");
		
	

	 ?>
	 <a href="agregar.php">agregar</a>

	<table border="1px">
		<thead>
		
		<tr>
		<td>nombre</td>
		<td>correo</td>
		<td>numero</td>
		<td>acciones</td>
		</tr>
		</thead>
		<tbody>
	<?php while($row = mysqli_fetch_array($tabla)){ ?>

	

		<tr>

		<td><?= $row['nombre'] ?></td>
		
		<td><?= $row['correo'] ?></td>

		<td><?php echo $row['numero'] ?></td>
		
			<td><a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
			<a href="eliminar.php?id=<?= $row['id']?>">Eliminar</a></td>
		</tr>
		</tbody>

	

	<?php } ?>
	</table>
</body>
</html>