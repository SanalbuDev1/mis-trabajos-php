<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$evoluciones = array("pichu" => array("Pikachu",'Raichu'),
						 "Eevee" => array("Jolteon","Flareon"));

	echo var_dump($evoluciones);

	echo "Pichu evoluciona a ".$evoluciones["pichu"][0]." y despues a ".$evoluciones["pichu"][1]
	."y su amigo Eevee evoluciona a ".$evoluciones["Eevee"][0];

	 ?>
</body>
</html>