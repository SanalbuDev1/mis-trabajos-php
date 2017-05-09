<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get">
		<input type="number" value="id" name="id">
		<input type="submit" value="eliminar">
	</form>

	<?php 
		if ($_GET) {
			$id=$_GET['id'];
			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"DELETE FROM regdate_2 WHERE id=$id");

			if($query){
				echo "elimino correctamente";
			}
		}
	 ?>
</body>
</html>