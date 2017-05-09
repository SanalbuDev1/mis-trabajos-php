<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	if($_POST){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$telephone = $_POST['telephone'];
		$date = $_POST['date'];
		$text1 = $_POST['text1'];
		$select1 = $_POST['select1'];
		$target = $_POST['target'];
		$security = $_POST['security'];
		$rango = $_POST['rango'];
		

		if($name != "" && $address != ""
			&& $password != "" && $telephone !="" && $date != "" &&  $select1 != "" && $target != "" && $security != "" && $rango != ""){

			$con = mysqli_connect('localhost','root','','redDate');
			$query = mysqli_query($con,"INSERT INTO `regdate_1`(`name`, `address`, `password`, `cc`, `date1`, `text1`, `select1`, `target`, `security`, `rango`, `id1`) VALUES ('$name','$address','$password','$telephone','$date','$text1','$select1','$target','$security','$rango','')");
			if ($query) {
			    echo "Se registro correctamente";
				}else{
				echo "No se registraron los datos";
				}

		}
			


	}else{
		echo "error no hay conexion";
	}

	 ?>
</body>
</html>