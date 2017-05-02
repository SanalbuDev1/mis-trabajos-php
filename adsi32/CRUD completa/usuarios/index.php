<?php  require "../public/header.php";
	   require "../conexion.php"; 
		$usuarios = mysqli_query($conex, "SELECT * FROM usuarios");
?>
	
	<h1>Usuarios</h1>
	<a href="adicionar.php">Adicionar</a>
	<hr>
	<table border="1">
		<thead>
			<tr>
				<td>Nombres</td>
				<td>Apellido</td>
				<td>Documento</td>
				<td>Acciones</td>

			</tr>
		</thead>
		<tbody>
		<?php  

			while($usuario = mysqli_fetch_array($usuarios)){
				echo "
				<tr>
					<td>".$usuario['nombres']."</td>
					<td>".$usuario['apellidos']."</td>
					<td>".$usuario['tipo_documento']." ". $usuario['documento']."</td>
					<td>
						<a href='consultar.php?id=".$usuario['id']."'>Consultar</a>
						<a href='modificar.php?id=".$usuario['id']."'>Modificar</a>
						<a href='javascript:;' class='eliminar-usuario' data-id='".$usuario['id']."'>Eliminar</a>
					</td>
				</tr>
				";
			}
		?>
		</tbody>
	</table>

<?php require "../public/footer.php"; ?>