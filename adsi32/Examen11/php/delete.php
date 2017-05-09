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

		$con=mysqli_connect("localhost","root","","bd");
		$query=mysqli_query($con,"DELETE FROM tabla_bd WHERE id=$id");

		if($query){
			echo "Usuario eliminado con exito";
		}else{
			echo "Usuario no eliminado";
		}
	}

	 ?>
</body>
</html>