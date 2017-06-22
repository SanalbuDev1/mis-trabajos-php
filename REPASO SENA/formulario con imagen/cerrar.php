<?php 
	session_start();
	if($_SESSION['id23']) {
		session_destroy();
		echo "<script>window.location.replace('index.php?var=cerrar')</script>";

	}else{
		echo "<script>window.location.replace('index.php?var=cor')</script>";

	}

 ?>