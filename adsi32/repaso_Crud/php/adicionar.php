<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
		<form method="post">
			<label>Nombre</label><input type="text" name="name"><br>
			<label>Apellido</label><input type="text" name="last_name"><br>
			<label for="">date</label><input type="date" name="date1"><br>
			<label for="">genero</label><br><label for="">masculino</label><input type="radio" value="M" name="genero"><br>

			<label for="femenino">femenino</label><input type="radio" value="F" name="genero"><br>
			<label for="">juego</label><select name="juego" id="">
				
			<option value="play4">play4</option>
			<option value="play3">play3</option>

			</select>
			<input type="submit" value="ingresar">
		</form>
	<?php 	
		if ($_POST) {
			$conx=mysqli_connect('localhost','root','','try');
			$name= $_POST['name'];
			$last_name= $_POST['last_name'];
			$date = $_POST['date1'];
			$genero = $_POST['genero'];
			$juego = $_POST['juego'];

			if ($name !='' && $last_name !='' && $date != "" && $genero!= "" && $juego != "") {
				$query=mysqli_query($conx, "INSERT INTO crud1 VALUES('$name','$last_name','','$date','$genero','$juego')");

				if($query){
					echo 'se ha conectado exitosamente';
				}else{
					echo 'no se ha registrado'; 
				}
			}
		}
		

	 ?>
</body>
</html>