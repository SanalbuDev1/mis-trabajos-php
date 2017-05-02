<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Request (POST)</h1>
	<hr>

	<form action="" method="post">
		<fieldset>
			<legend><h2>Datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" 
				value="<?php  if (isset($_REQUEST['nombre'])) {
					echo $_REQUEST['nombre'];
				} ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="Ingrese su correo"
				value="<?php  if (isset($_REQUEST['email'])) {
					echo $_REQUEST['email'];
				} ?>">>
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Ingrese su email"
				value="<?php  if (isset($_REQUEST['telefono'])) {
					echo $_REQUEST['telefono'];
				} ?>">>
			</div>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
	</form>
	<ul>	
	<?php 

		if($_REQUEST){
		$errores=0;
		foreach ($_REQUEST as $key => $value) {
			if (!$value) {
				$errores++;
				echo $errores."errores"."<br>";
			}
		}
			
					$nombre = $_REQUEST['nombre'];
					$email = $_REQUEST['email'];
					$telefono = $_REQUEST['telefono'];
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