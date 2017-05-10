<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if ($_GET) {
		$id=$_GET['id'];
		$conx=mysqli_connect('localhost','root','','try');
		$query=mysqli_query($conx,"SELECT * FROM crud1 WHERE id=$id");
		$row=mysqli_fetch_array($query);

	}

	 ?>

	<h1>Usuarios</h1>
	<form method="post">
		<label for="">Nombre</label><input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>"><br>
		<label for="">Apellidos</label><input type="text" name="Apellido" value="<?php echo $row['Apellido'];	 ?>">
		<br>	
		<label for="	">date</label>
		<input type="date" name="date1" value="<?php echo $row['date1'];	 ?>"	><br>

		<label for="	">genero</label><br>	
		<label for="	">femenino</label>
		<input <?php 	if($row['genero'] == 'F'){echo 'checked';} ?> type="radio" name="genero" value="F"><br>
		<label for="	">masculino</label>
		<input <?php  if($row['genero'] == 'M'){echo 'checked';}	 ?> type="radio" name="genero" value="M">	
		<select name="juego" id="">
			<option value="play4">play4</option>
			<option value="play3">play3</option>
		</select>

		<input type="submit" value="submit">
		
	</form>

	<?php 	

		if ($_POST) {

			$Nombre =$_POST['Nombre'];
			$Apellido =$_POST['Apellido'];
			$date1=$_POST['date1'];
			$genero = $_POST['genero'];
			$juego = $_POST['juego'];


			$conx=mysqli_connect('localhost','root','','try');
			$query=mysqli_query($conx,"UPDATE crud1 SET Nombre= '$Nombre' , Apellido='$Apellido' , date1='$date1' ,genero='$genero' , juego='$juego' WHERE id=$id");
			if ($query) {
				echo "se modifico correctamente";
			}else{
				echo "no se modifico";
			}
		}

	 ?>

</body>
</html>