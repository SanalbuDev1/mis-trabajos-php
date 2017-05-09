<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="post">
		
		<input type="text" name="name" placeholder="Escriba su nombre">
		<input type="submit" value="registrar">

	</form>
	<br>
	<br>
	<br>
	<br>
	<br>

	<form method="get">
		<input type="text" name="name" placeholder="escriba la modificacion">
		<input type="number" placeholder="escriba su id" name="id">
		<input type="submit" value="modificar">
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="select.php" method="get">
		<input type="number" name="id" placeholder="consultar">
		<input type="submit" value="consultar">
	</form>
	
	<br>
	<br>
	<br>
	<br>
	<br>

	<form action="delete.php" method="get">
		<input type="number" placeholder="id" name="id">
		<input type="submit" placeholder="delete">
	</form>
	
	<br>
	<br>
	<br>
	<br>
	<br>

	<form action="listar.php">
		
		<input type="number" name="id">
		<input type="submit" value="registrar">

	</form>


	<?php 

		if($_POST){
			$name=$_POST['name'];
			

			if($name != ""){
				$con = mysqli_connect("localhost","root","","bd");
				$query = mysqli_query($con,"INSERT INTO tabla_bd VALUES('$name','')");

				if($query){
					echo "Usuario registrado con exito";
				}else{
					echo "No se registro el query";
				}
			}
		}else

		if($_GET){
			$name=$_GET['name'];
			$id=$_GET['id'];

			echo "estoy en get";

			if($name != "ss"){
				$con = mysqli_connect("localhost","root","","bd");
				$query = mysqli_query($con,"UPDATE `tabla_bd` SET name=('$name') WHERE id=$id");

				if($query){
					echo "Usuario modificado";
				}else{
					echo "Usuario no modificado";
				}
			}
		}


	

	 ?>
</body>
</html>