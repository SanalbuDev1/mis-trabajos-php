<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get">
		<input type="text" name="cc" placeholder="Digita la cedula">
		<input type="submit" value="ingresar">
	</form>
	<?php
		if($_GET){
			$cc=$_GET['cc'];

			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"SELECT * FROM regdate_1 WHERE cc='$cc'");
			$row=mysqli_fetch_array($query);


		}
	 ?>
	 
</body>
</html>