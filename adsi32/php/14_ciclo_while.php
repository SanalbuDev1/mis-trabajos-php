<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>ciclo while</h1>

	<?php 
		$i=0.5;
		while ($i < 100) {
		
		echo "<br>".$i;
		$i+=1;
		}

	 ?>
	 <h1>Ciclo Do While</h1>

	 <?php 
	 	$l=1;
	 	do{
	 	  
	 	  
	 	  if($l%3==0){
	 	  	echo "<br>".$l;
	 	  }
	 	  $l++;
	 	}while($l<100)



	  ?>
</body>
</html>