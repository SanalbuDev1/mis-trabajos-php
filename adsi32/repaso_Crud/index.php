<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Usuarios</h1>
	<a href="php/adicionar.php">adicionar</a>
	

	<hr>	
	<table border="2px">
		<tr>	
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Acciones</td>
		</tr>
	
			<?php 

			$conx=mysqli_connect('localhost','root','','try');
			$query =mysqli_query($conx,"SELECT * FROM crud1");

			while($row=mysqli_fetch_array($query)){
				// echo $row['Nombre'].','.$row['Apellido'];`
				echo "<tr>

						<td>".$row['Nombre']."</td>
						<td>".$row['Apellido']."</td>
						<td>".$row['date1']."</td>
						<td>".$row['genero']."</td>
						<td>".$row['juego']."</td>


						<td>
							<a href='php/consultar.php?id=".$row['id']."'>Consultar</a>
							<a href='php/modificar.php?id=".$row['id']."'>Modificar</a>

								

				</tr>";
			}

			 ?>

	</table>
</body>
</html>