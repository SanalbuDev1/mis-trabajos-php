<?php require "../conexion.php"; ?>

	<h1>Usuarios</h1>
	<a href="adicionar.php">Adicionar</a>
	<hr>
	<form method="post">
		<div>
			<label>Nombre</label>
			<input type="text" placeholder="Nombres" name="nombres">
		</div>
		<div>
			<label>Apellidos</label>
			<input type="text" placeholder="Apellidos" name="apellidos">
		</div>
		<div>
			<label>E-Mail</label>
			<input type="email" placeholder="E-Mail" name="correo">
		</div>
		<div>
			<label>Celular</label>
			<input type="number" placeholder="Celular" name="celular">
		</div>
		<div>
			<label>Genero: </label>
				<label>Masculino</label>
				<input type="radio" placeholder="Masculino" name="genero" value="M">
				<label>Femenino</label>
				<input type="radio" placeholder="Femenino" name="genero" value="F">
		</div>
		<select name="tipo_documento">
			<option value="">-- Seleccione --</option>
			<option value="TI">Tarjeta de Identidad</option>
			<option value="CC">Cedula de ciudadania</option>
		</select>
		<div>
			<label>Documento</label>
			<input type="number" placeholder="Documento" name="documento">
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
				$query = mysqli_query($conex, "INSERT INTO usuarios VALUES('','$nombres','$apellidos','$correo','$celular', '$genero', '$tipo_documento', '$documento')");
			}
			else {
				echo "<script>alert('Hay campos vacíos por favor llenelos');</script>";
			}
		}
	?>
		

<?php require "../public/footer.php"; ?>