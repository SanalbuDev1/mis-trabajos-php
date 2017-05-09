<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style>
	tr:last-child{
	text-align: center;
	
	}
</style>
	<?php 
		if($_GET){
			$cc=$_GET['CC'];
			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"SELECT * FROM regdate_1 WHERE cc='$cc'");


			$row=mysqli_fetch_array($query);

		}
	 ?>
	 <table border="2px">
	 	<tr>
	 	<td>Nombre</td><td>correo</td><td>password</td><td>cedula</td><td>date</td><td>text1</td><td>banco</td>
	 	<td>targeta</td><td>codigo de seguridad</td><td>rango</td><td>id</td>
	 	</tr>
	 	<tr>
	 	<td><?php echo $row['name']; ?></td>
	 	<td><?php echo $row['address']; ?></td>
	 	<td><?php echo $row['password']; ?></td>
	 	<td><?php echo $row['cc']; ?></td>
	 	<td><?php echo $row['date1']; ?></td>
	 	<td><?php echo $row['text1']; ?></td>
	 	<td><?php echo $row['select1']; ?></td>
	 	<td><?php echo $row['text1']; ?></td>
	 	<td><?php echo $row['security']; ?></td>
	 	<td><?php echo $row['rango']; ?></td>
	 	<td><?php echo $row['id1']; ?></td>

		

	 	</tr>
	 	
	 </table>
		<form method="post">
			<input type="id" placeholder="escriba el id" name="id">
			<input type="submit" value="eliminar">
		</form>
	 <?php 


	 	if ($_POST) {

	 		$id=$_POST['id'];

	 		$con=mysqli_connect('localhost','root','','reddate');
	 		$query=mysqli_query($con,"DELETE FROM regdate_1 WHERE id1=$id");
	 		if($query){
	 			echo "se elimino correctamente";
	 		}
	 	}else{
	 		echo "no entro al post";
	 	}

	  ?>
</body>
</html>