<?php 
	session_start(); 
	
	6

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Sesiones</h1>
	<hr>
	
		<form method="post">
			<input type="submit" name="boton" value="enviar">
		</form>

		<?php if ($_POST) {

			session_destroy();
		} ?>

	
	<?php 
		
			if (isset($_SESSION['visitas'])) {
			
			$_SESSION['visitas']++;



		}else{
			$_SESSION['visitas']=1;
			
			

		}
		
		

		echo "Numero de visitas". $_SESSION['visitas'] ."";
	 ?>
</body>
</html>