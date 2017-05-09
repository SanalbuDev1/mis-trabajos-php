<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form method="GET" ">
	<label for="">cedula</label><input type="text" name="cc">
	<input type="submit" value="consultar"><br>
	<br>
	<br>
	<br>
	<br>
</form>
	<?php 
	if ($_GET) {
		$cc=$_GET['cc'];
		$con=mysqli_connect('localhost','root','','reddate');
		$query=mysqli_query($con,"SELECT * FROM regdate_1 WHERE cc='$cc'");
		$row=mysqli_fetch_array($query);
	}
		
	


	 ?>

	  <form method="post">
	  	<label for="">nombre</label><input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
	  	<label for="">direccion</label><input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
	  	<label for="">password</label><input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
	  	<label for="">cedula</label><input type="text" name="cc" value="<?php echo $row['cc']; ?>"><br>
	  	<label for="">date</label><input type="text" name="date" value="<?php echo $row['date1']; ?>"><br>
	  	<label for="">comentarios</label><textarea type="text" name="text1" value="<?php echo $row['text1']; ?>"><?php echo $row['text1']; ?></textarea><br>
	  	<label for="">rango</label><input type="text" name="select1" value="<?php echo $row['select1']; ?>"><br>
	  	<label for="">targeta</label><input type="text" name="target" value="<?php echo $row['target']; ?>"><br>
	  	<label for="">codigo seguridad</label><input type="text" name="security" value="<?php echo $row['security']; ?>"><br>
	  	<label for="">rango</label><input type="text" name="rango" value="<?php echo $row['rango']; ?>"><br>



	  	<label for="">id</label><input type="text" name="id1" value="<?php echo $row['id1']; ?>"><br>
	  	<input type="submit" value="Modificar">
	  </form>

	  <?php 


	  if ($_POST) {
	  	$name=$_POST['name'];
	  	$address=$_POST['address'];
	  	$password=$_POST['password'];
	  	$cc=$_POST['cc'];
	  	$date1=$_POST['date'];
	  	$text1=$_POST['text1'];
	  	$select1=$_POST['select1'];
	  	$target=$_POST['target'];
	  	$security=$_POST['security'];
	  	$rango=$_POST['rango'];
	  	$id1=$_POST['id1'];

	  	$con=mysqli_connect('localhost','root','','reddate');
	  	$query=mysqli_query($con,"UPDATE regdate_1 SET name='$name',address='$address',password='$password', cc='$cc'  
	  		,date1='$date1',text1='$text1',select1='$select1',target=$target,security='$security',rango='$rango' where id1='$id1' ");

	  	if($query){
	  		echo "se modifico correctamente";
	  	}else{
	  		echo "no se modifico";
	  	}
	  }

	   ?>

</body>
</html>