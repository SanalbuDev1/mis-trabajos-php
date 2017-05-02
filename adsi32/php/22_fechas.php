<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Fechas (DATE) <?php echo date('Y-m-d') ?></h1>
	<h1>Mi fecha de nacimiento <?php echo date('Y-m-d', 889398000) ?></h1>

	<?php 
		$manana = mktime(0,0,0,date('m'),date('d')+1,date('Y'));
		echo "mañana es : ".date('Y-m-d', $manana);
	 ?>
</body>
</html>