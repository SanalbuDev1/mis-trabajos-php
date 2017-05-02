<?php 
	require "../conexion.php";
	require "../public/header.php";

	if($_GET){

		$id = $_GET['id'];
		$consultar = mysqli_query($conex, "SELECT * FROM usuarios WHERE id = $id");
		$row = mysqli_fetch_array($consultar);
	}
?>

	<h1>Usuarios</h1>
	<a href="index.php">Regresar</a>
	<hr>
	<form method="post">
		<div>
			<label>Nombre</label>
			<input type="text" placeholder="Nombres" name="nombres" value="<?php echo $row['nombres']; ?>">
		</div>
		<div>
			<label>Apellidos</label>
			<input type="text" placeholder="Apellidos" name="apellidos" value="<?php echo $row['apellidos']; ?>">
		</div>
		<div>
			<label>E-Mail</label>
			<input type="email" placeholder="E-Mail" name="correo" value="<?php echo $row['correo']; ?>">
		</div>
		<div>
			<label>Celular</label>
			<input type="number" placeholder="Celular" name="celular" value="<?php echo $row['celular']; ?>">
		</div>
		<div>
			<label>Genero: </label>
				<label>Masculino</label>
				<input <?php if($row['genero'] == "M"){ echo "checked"; } ?>  type="radio" placeholder="Masculino" name="genero" value="M">
				<label>Femenino</label>
				<input <?php if($row['genero'] == "F"){ echo "checked"; } ?>  type="radio" placeholder="Femenino" name="genero" value="F">
		</div>
		<select name="tipo_documento">
			<option value="">-- Seleccione --</option>
			<option <?php if($row['tipo_documento'] == "TI"){ echo "selected"; } ?> value="TI">Tarjeta de Identidad</option>
			<option <?php if($row['tipo_documento'] == "CC"){ echo "selected"; } ?> value="CC">Cedula de ciudadania</option>
		</select>
		<div>
			<label>Documento</label>
			<input type="number" placeholder="Documento" name="documento" value="<?php echo $row['documento']; ?>">
		</div>
		<input type="submit">
	</form>
	<?php 

	

		if($_POST){
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$correo = $_POST['correo'];
			$celular = $_POST['celular'];
			$genero = $_POST['genero'];
			$tipo_documento = $_POST['tipo_documento'];
			$documento = $_POST['documento'];

			if($nombres != "" && $apellidos != "" && $correo != "" && $celular != "" && $genero != "" && $tipo_documento != "" && $documento != ""){
				/*$query = mysqli_query($conex, "INSERT INTO usuarios VALUES('','$nombres','$apellidos','$correo','$celular', '$genero', '$tipo_documento', '$documento')");*/

				$modificar = mysqli_query($conex, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos', correo = '$correo', celular = '$celular', genero = '$genero', tipo_documento = '$tipo_documento', documento = '$documento' WHERE id = $id");
				

			}
			else {
				echo "<script>alert('Hay campos vacíos por favor llenelos');</script>";
			}
		}
	?>
		

<?php require "../public/footer.php"; ?>