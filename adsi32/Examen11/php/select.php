<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if($_GET){
			
			$id=$_GET['id'];

				
				$con = mysqli_connect("localhost","root","","bd");
				$query = mysqli_query($con,"SELECT * FROM tabla_bd WHERE id=$id");

				if($query){
					echo "usuario consultado";
				}

				echo "<table border='2px'>";
	  				while ($row = mysqli_fetch_array($query)){ 
				echo "<tr><td>$row[0]</td></tr>";

				} 
		echo "</table>";

				
		}else{
			echo "No estoy en post get";
		}
	 ?>
</body>
</html>