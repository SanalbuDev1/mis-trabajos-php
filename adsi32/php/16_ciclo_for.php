<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style>
		div{
			width: 20px;
			height: 20px;
			
		}
	</style>
	
	<?php
    $contador=0;
		for ($i=255; $i >0 ; $i-=2) { 
			echo "<br><div style='background-color:rgba(".$i.",0,0,1);'></div>";
			

			$contador+=1;
			echo $contador;

		}
	 ?>
</body>
</html>