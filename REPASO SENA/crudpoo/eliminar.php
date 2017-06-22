<?php 
	include('clase.php');
	if ($_GET) {
		
		$id=$_GET['id'];
		$datos = repaso::consultar($id);
		$datos->eliminar();


	}

 ?>