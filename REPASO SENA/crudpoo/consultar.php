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
				
			</tr>
		</thead>		
		<?php 

		if ($_GET) {
			$id=$_GET['id'];
			$repaso = repaso::consultar($id);
			$datos = $repaso->selectId();	
			var_dump($datos);
			$row = $datos->fetch_array();

		}

		
		
		 ?>
		 <tbody>
		 	    <tr>
		 	    	
				<td><?= $row['id'] ?></td>
				<td><?= $row['correo'] ?></td>
				<td><?= $row['contra'] ?></td>
				<td><?= $row['imagen'] ?></td>


		 	    </tr>
				
		 </tbody>
	</table>
	
</body>
</html>