<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if($_GET){
			$name=$_GET['name'];
			$last_name=$_GET['last_name'];
			$date1=$_GET['date1'];
			$target=$_GET['target'];
			$security=$_GET['security'];
			$code=$_GET['code'];
			$raza=$_GET['raza'];

			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"INSERT INTO regdate_2 VALUES('$name','$last_name','$date1','$target','$security','$code','$raza','')");

			if($query){
				echo "registro";
			}else{
				echo "no regists	ro";
			}



		}else{
			echo "no entro en get";
		}
	 ?>
</body>
</html>