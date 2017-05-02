<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Formulario (POST)</h1>
	<hr>

	<form action="" method="post">
		<fieldset>
			<legend><h2>Datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" 
				value="<?php  if (isset($_POST['nombre'])) {
					echo $_POST['nombre'];
				} ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="Ingrese su correo"
				value="<?php  if (isset($_POST['email'])) {
					echo $_POST['email'];
				} ?>">>
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Ingrese su email"
				value="<?php  if (isset($_POST['telefono'])) {
					echo $_POST['telefono'];
				} ?>">>
			</div>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
	</form>
	<ul>	
	<?php 

		if($_POST){
		$errores=0;
		foreach ($_POST as $key => $value) {
			if (!$value) {
				$errores++;
				echo $errores."errores"."<br>";
			}
		}
			
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$telefono = $_POST['telefono'];
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