<?php 
	include "../conexion.php";
	include "../public/footer.php";

	if($_GET){
		$id = $_GET['id'];
		$consulta = mysqli_query($conex, "DELETE FROM usuarios WHERE id = $id");
		if($consulta){
			echo "<script>alert('Usuario eliminado con éxito')</script>";
			header("Location: index.php");
		}
	}
?>