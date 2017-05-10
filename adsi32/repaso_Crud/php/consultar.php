<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php  
		if($_GET){
			$id=$_GET['id'];
			$conx = mysqli_connect('localhost','root','','try');
			$query = mysqli_query($conx, "SELECT * FROM crud1 WHERE id =$id");

			$row = mysqli_fetch_array($query);
		}

	?>
	<table border="2px">
		<tr>
			<td>Nombre</td>
			<td><?php echo $row['Nombre']; ?></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><?php echo $row['Apellido']; ?></td>
		</tr>
		<tr>
			<td>date</td>
			<td><?php echo $row['date1']; ?></td>
		</tr>
		<tr>
			<td>genero</td>
			<td><?php echo $row['genero']; ?></td>
		</tr>
		<tr>
			<td>juego</td>
			<td><?php echo $row['juego']; ?></td>
		</tr>
	</table>
</body>
</html>