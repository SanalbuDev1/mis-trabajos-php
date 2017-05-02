<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Matrices</h1>
	<hr>
	<!-- Matrices numericas -->
	<?php 
		echo "<h3>Numericos</h3>";
		$vehiculos = array('Volkswagen','Renault','Chevrolet','Mazada','Renault4');

		$vehiculos[5]='kia';
		$vehiculos[6]='Fiat';
		$vehiculos[7]='Toyota';
		$vehiculos[8]='kia';

		echo  var_dump($vehiculos);
		
	
		//Matrices asociativas
		echo "<h3>Asociativos</h3>";
		$referencias = array("hugo" => "1998" , "Paco" => "1999" , "Luis" => "2000" ); 
		$referencias['robertiño'] = "2001";
		 echo var_dump($referencias);

		 echo "hugo es del año : ".$referencias["hugo"];
		
		



	 ?>
</body>
</html>