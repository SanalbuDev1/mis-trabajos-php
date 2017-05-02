<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$cadena = 'adsi';
	$cadena1 = "hola bebes aca puedo llamar variables con   $cadena";

	//Concatenar
	$cadena2 = 'Centro de procesos industriales';
	$cadena4 = "sena regional caldas ".$cadena2;
		


?>

	<h2> <?=$cadena2 ?> </h2>
	<h2>la cadena <?=$cadena2 ?> tiene <?php echo strlen($cadena2) ?> caracteres </h2>
	<h2>la cadena <?=$cadena2 ?> tiene <?php echo strlen($cadena2) ?> caracteres </h2>




</body>
</html>







