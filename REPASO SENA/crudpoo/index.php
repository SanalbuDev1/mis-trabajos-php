<?php include('clase.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table border="2px">
		<thead>
		<tr><td><a href="adicionar.php">adicionar</a></td></tr>
			<tr>
				<td>id</td>
				<td>correo</td>
				<td>contraseña</td>
				<td>image</td>
				<td>acciones</td>
			</tr>
		</thead>		
		<?php 

		$repaso = repaso::index();
		$datos = $repaso->select();	
		
		 ?>
		 <tbody>
		 	<?php while ($row = $datos->fetch_array()) { ?>
		 		<tr>
		 			<td><?= $row['id'] ?></td>
		 			<td><?= $row['correo'] ?></td>
		 			<td><?= $row['contra'] ?></td>
		 			<td><?= $row['imagen'] ?></td>
		 			<td>
		 				<a href="consultar.php?id=<?= $row['id'] ?>">consultar</a>
		 				<a href="modificar.php?id=<?= $row['id'] ?>">modificar</a>
		 				<a href="eliminar.php?id=<?= $row['id'] ?>">eliminar</a>

		 			</td>

		 		</tr>
		 	<?php } ?>
		 </tbody>
	</table>
	
</body>
</html>