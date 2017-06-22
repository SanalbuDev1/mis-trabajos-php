<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		if ($_GET) {

			$id = $_GET['id'];
			$con = mysqli_connect("localhost","root","","php1");
			$query = mysqli_query($con , "SELECT * FROM php1t where id=$id");
			$row = mysqli_fetch_array($query);
		}
		

	 ?>
	
	<form method="post" action="">
		<input type="text" name="nombre" value="<?= $row['nombre'] ?>">
		<input type="text" name="correo" value="<?= $row['correo'] ?>">
		<input type="number" name="numero" value="<?php echo $row['numero}'] ?>">
		<input type="submit" value="registrar">
		<input type="hidden" name="accion" value="editar">
	</form>

	<?php 

	if ($_POST) {
		if($_POST['accion'] == 'editar'){
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$numero = $_POST['numero'];

			$query2 = mysqli_query($con , "UPDATE php1t set nombre='$nombre' , correo='$correo' , numero='$numero' where id=$id ");

			if($query2){
				echo "<script>window.location.replace('index.php?ver=add')</script>";
			}else{
				echo "<script>alert('No se registro');</script>";
			}
			
		}	
	}

	

	 ?>

</body>
</html>