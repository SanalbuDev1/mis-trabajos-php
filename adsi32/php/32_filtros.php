<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	<h1>Filtros</h1>
	<hr>	

	<form action="" method="post">
		<fieldset>
				<legend>
						<br>	
						<h4>Numero entero</h4>
						<input type="text" name="numero" placeholder="Ingrese un numero">
						<input type="submit" name="btn1" value="filtrar">
				</legend>	
		</fieldset>
	</form>

	<form action="" method="post">
		<fieldset>
				<legend>
						<br>	
						<h4>Numero entero(opciones)</h4>
						<input type="text" name="numero" placeholder="Ingrese un numero">
						<input type="submit" name="btn2" value="filtrar">
				</legend>	
		</fieldset>
	</form>

	<form action="" method="post">
		<fieldset>
				<legend>
						<br>	
						<h4>Email</h4>
						<input type="text" name="correo" placeholder="Ingrese el correo">
						<input type="submit" name="btn3" value="filtrar">
				</legend>	
		</fieldset>
	</form>

	<form action="" method="post">
		<fieldset>
				<legend>
						<br>	
						<h4>Numero entero(opciones)</h4>
						<input type="text" name="url" placeholder="Ingrese el correo">
						<input type="submit" name="btn4" value="filtrar">
				</legend>	
		</fieldset>
	</form>


	<?php 	
		if($_POST){
			//numero entero
			if (isset($_POST['btn1'])) {
				$numero = $_POST['numero'];

				if (!filter_var($numero,FILTER_VALIDATE_INT)) {
						echo "<li>No es un numero entero</l1>";
					}else{
						echo "<li>Si es un numero entero</l1>";

					}	
			}
			//numero entero opciones
			if (isset($_POST['btn2'])) {
				$numero = $_POST['numero'];
				$opt = array("options" => array (
					'min_range' => 0 , 
					"max_range" => 255
				));
				if (!filter_var($numero,FILTER_VALIDATE_INT,$opt)) {
						echo "<li>No es incorrecto</l1>";
					}else{
						echo "<li>El numero es correcto</l1>";

					}
			}
			//Email
			if (isset($_POST['btn3'])) {
				
				
				if (!filter_var(INPUT_POST,'correo',FILTER_VALIDATE_EMAIL)) {
						echo "<li>El email es invalido</l1>";
					}else{
						echo "<li><El email es valido</l1>";

					}
			}

			if (isset($_POST['btn4'])) {
				$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
				echo $url;
			}

			
		}
	 ?>

</body>
</html>