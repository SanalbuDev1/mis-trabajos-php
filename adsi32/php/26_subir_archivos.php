<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Subir archivos al servidor</h1>
	<hr>

	<form  method="post" enctype="multipart/form-data">
		<legend>
			<h2>Subir fotos</h2>
		</legend>
		<input type="file" name="foto" accept="image/*">
		<br>
		<input type="submit" value="subir-foto">
	</form>

	<?php 
		if($_FILES){

			if($_FILES['foto']['size'] <1000000 && $_FILES['foto']['type'] ==  'image/png'){

			if($_FILES['foto']['error'] > 0){
				echo $_FILES['foto']['error'];

			}else{
				echo "Nombres".$_FILES['foto']['name']."<br>";
				echo "tipo".$_FILES['foto']['type']."<br>";
				echo "nombre".$_FILES['foto']['size'] / 1024 ."kb"."<br>";
				echo "almacenamiento_temporal".$_FILES['foto']['tmp_name']."<br>";

				if (file_exists('subir/'.$_FILES['foto']['name'])) {
					echo "el archivo".$_FILES."ya exite";
				}else{
					move_uploaded_file($_FILES['foto']['tmp_name'], 'archivo/'.$_FILES['foto']['name']);
					echo "el archivo subio";
				}
			

			}
		}else{ echo "error la imagen no es png o es muy grande";
	}
		}else{
			echo "no entre a post";	
		}
	 ?>
</body>
</html>