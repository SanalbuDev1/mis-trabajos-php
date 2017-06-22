<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form method="post" action="">
		<input type="text" name="nombre" value="nombre">
		<input type="text" name="correo" value="correo">
		<input type="number" name="numero" value="numero">
		<input type="submit" value="registrar">
		<input type="hidden" name="accion" value="ingresar">
	</form>

	<?php 

	if ($_POST) {
		if($_POST['accion'] == 'ingresar'){
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$numero = $_POST['numero'];

			$con = mysqli_connect("localhost","root","","php1");
			$query = mysqli_query($con , "INSERT INTO php1t VALUES('','$nombre','$correo','$numero')");

			if($query){
				echo "<script>window.location.replace('index.php?ver=add')</script>";
			}else{
				echo "No se registro";
			}
			
		}	
	}

	

	 ?>

</body>
</html>