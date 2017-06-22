<?php require("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		
		<input type="text" name="correo" value="correo">
		<input type="text" name="password" value="password">
		<input type="submit" value="login">

	</form>

	<?php 

	if ($_POST) {
		$correo = $_POST['correo'];
		$contra = $_POST['password'];

		$sql = mysqli_query($con , "SELECT * FROM php2t where correo='$correo' and contrasena='$contra' ");
		$usuario = mysqli_fetch_array($sql);



		if (!$usuario['id']) {

			echo "<script>window.location.replace('login.php?var=err')</script>";
		}else{
			session_start();
			$_SESSION['id23'] = $usuario['id'];
			$_SESSION['nombre'] = $usuario['nombre'];

		
			 echo "<script>window.location.replace('index.php?var=cor')</script>";

		}

	}

	 ?>
</body>
</html>