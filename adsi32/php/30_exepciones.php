<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Exepciones (Try , Throw , Catch)</h1>
	<hr>

	<?php 

		function verificarEdad($edad){
			if ($edad >= 18) {
				echo '<script>
	 					alert("hola señor");
	 				  </script>';
			}else{
				throw new Exception("Usted no puede votar");
				
			}
		}
		try {
			verificarEdad(25);
		} catch (Exception $e) {
				echo "Error ".$e->getMessage();
				
			
		}

	 ?>
	 

</body>
</html>