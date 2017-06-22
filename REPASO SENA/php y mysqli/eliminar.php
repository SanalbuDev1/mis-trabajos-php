<?php 
	
	if ($_GET) {

		$id = $_GET['id'];
		$con = mysqli_connect("localhost","root","","php1");
		$query = mysqli_query($con , "DELETE  FROM php1t where id=$id");

		var_dump($query);

		 if ($query) {
		 	echo "<script>window.location.replace('index.php?val=ecorrecto')</script>";
		 }else{
			echo "<script>window.location.replace('index.php?val=incorr')</script>";
		 }
	}
	

 ?>