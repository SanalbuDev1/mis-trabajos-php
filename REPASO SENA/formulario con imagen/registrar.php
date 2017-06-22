<?php require("conexion.php") 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		
		<input type="text" name="name" value="nombre">
		<input type="text" name="address" value="correo">
		<input type="text" name="pass" value="password">
		<input type="file" name="image" accept="image/*" value="">	
		<input type="submit" value="registrar">

	</form>

	<?php 

		if ($_POST) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$pass = $_POST['pass'];

		

			

			if (!empty($_FILES['image']['name'])) {

					

					$nimage    = time();					
				    $path      = $_FILES['image']['name'];
				    $extension = pathinfo($path, PATHINFO_EXTENSION);
					$image     = 'imgs/'.$nimage.'.'.$extension;			
				
						
						
					move_uploaded_file($_FILES['image']['tmp_name'], $image);	

						$sql = mysqli_query($con , "INSERT INTO php2t VALUES(DEFAULT , '$name' , '$address' , '$pass' , '$image')");	
					

				
			
			}else{
				$image = "imgs/nada.jpg";
				$sql = mysqli_query($con , "INSERT INTO php2t VALUES(DEFAULT , '$name' , '$address' , '$pass' , '$image')");	

			}

			 if ($sql) {
				echo "<script>window.location.replace('index.php')</script>";
			}else{
			 	
			 	 echo "<script>alert('incorrecto');</script>";
			 }

		}

	 ?>
	
</body>
</html>