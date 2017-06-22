<?php include("conexion.php");
session_start();

if (!$_SESSION) {
	echo "<script>window.location.replace('login.php')</script>";
	
}

$idu = $_SESSION['id23'];

$sqli = mysqli_query($con , "SELECT * FROM php2t where id='$idu'");
$rowi = mysqli_fetch_array($sqli);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

	$sql = mysqli_query($con , "SELECT * FROM php2t");

?>
<h1>Bienvenido <?= $_SESSION['nombre']; ?></h1>
<h2>su contraseña es <?= $rowi['contrasena']; ?></h2>
<a href="registrar.php">añadir</a>
<a href="cerrar.php">cerrar sesion</a>
<table border="1px">
	<tr>
		<td>nombre</td>
		<td>correo</td>
		<td>contraseña</td>
		<td>imagen</td>
		<td>acciones</td>
	</tr>

<?php	while ($row = mysqli_fetch_array($sql)) {  ?>
		<tr>
				<td><?= $row['nombre'] ?></td>
				<td><?= $row['correo'] ?></td>
				<td><?= $row['contrasena'] ?></td>
				<td><?= $row['imagen'] ?></td>
				<td>
					<a href="update.php?id=<?= $row['id'] ?>">modificar</a>
					<a href="eliminar.php?id=<?php $row['id'] ?>">eliminar</a>
				</td>
		</tr>	
	

<?php } ?>
</table>
	
	

</body>
</html>