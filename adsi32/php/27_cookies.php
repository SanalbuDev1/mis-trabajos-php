<?php 
	
	if ($_POST) {
		$nombre = $_POST['nombre'];
		setcookie('nombre',$nombre, time()+120);

		// setcookie('nombre',$nombre, time()-120);
		// para matar un cookies se coloca tiempo negativo 
	
	}
	

	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" >
		<input type="text" value="nombre" name="nombre">
		<br>
		<input type="search" value="buscar" name="busqueda">
		<br>
		<input type="submit" value="enviar">
	</form>
	<?php 
	if(isset($_COOKIE['nombre'])){
		echo "<h3>Bienvenido ".$_COOKIE['nombre']."</h3>";
	}
	?>
</body>
</html>