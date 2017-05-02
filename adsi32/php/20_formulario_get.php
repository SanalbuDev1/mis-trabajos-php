<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Formulario (POST)</h1>
	<hr>

	<form action="" method="get">
		<fieldset>
			<legend><h2>Datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" 
				value="<?php  if (isset($_GET['nombre'])) {
					echo $_GET['nombre'];
				} ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="Ingrese su correo"
				value="<?php  if (isset($_GET['email'])) {
					echo $_GET['email'];
				} ?>">>
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Ingrese su email"
				value="<?php  if (isset($_GET['telefono'])) {
					echo $_GET['telefono'];
				} ?>">>
			</div>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
	</form>
	<ul>	
	<?php 

		if($_GET){
		$errores=0;
		foreach ($_GET as $key => $value) {
			if (!$value) {
				$errores++;
				echo $errores."errores"."<br>";
			}
		}
			
					$nombre = $_GET['nombre'];
					$email = $_GET['email'];
					$telefono = $_GET['telefono'];
				echo "<li>El nombre es ".$nombre."</li>";
				echo "<li>El correo es ".$email."</li>";
				echo "<li>El telefono es ".$telefono."</li>";

			
			
			


		}else{
			echo "no entro en post";
		}

	 ?>
	 </ul>
</body>
</html>