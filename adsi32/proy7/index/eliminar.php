<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
		$id = $_GET['id']; 
		$con = mysqli_connect("localhost","root","","proy7");
		$query = mysqli_query($con , "DELETE FROM alquiler WHERE id=$id");

		if($query){
			echo "se elimino correctamente";
			header("location : index.php");	
			
		}

	 ?>
	
	 

</body>
</html>