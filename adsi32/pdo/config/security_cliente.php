<?php 
	
	if(!isset($_SESSION['urol'])){
		echo "<script>alert('acceso denegado');</script>";
		echo "<script>window.location.replace('index.php');</script>";
	}else{
		if($_SESSION['urol']=='administrador'){
			echo "<script>alert('acceso denegado');</script>";
			echo "<script>window.location.replace('index.php');</script>";
		}

	}