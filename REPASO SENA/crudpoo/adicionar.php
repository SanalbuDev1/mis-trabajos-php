<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="accion.php" method="post" enctype="multipart/form-data">
		<label for="">correo</label><input type="text" name="correo" value="correo">
		<label for="">contraseña</label><input type="text" name="contra" value="contraseña">
		<label for="">imagen</label><input type="file"  class="form-control" name="image"  accept="image/*" placeholder="main_ritual">
	    <input type="submit" value="ingresar">
		<input type="hidden" name="accion" value="add">
	</form>
	
</body>
</html>