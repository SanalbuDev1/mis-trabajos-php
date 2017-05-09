<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../CSS/compras.css">
</head>
<body>
	<form method="get">
	<input type="number" name="id">
	<input type="submit" value="consultar">
</form>
<a href="eliminar.php">ELIMINAR</a>

	

	<?php 
		if ($_GET) {
			$id=$_GET['id'];

			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"SELECT * FROM regdate_2 WHERE id=$id");
			$row=mysqli_fetch_array($query);

		}
	 ?>
	<div><h1>formulario compra</h1>
		
		<form method="post">
			<input type="text" placeholder="Nombre Completo" name="name" maxlength="50" value="<?php echo $row['name']; ?>"	>
			<input type="text" placeholder="Apellidos" name="last_name" maxlength="50" value="<?php echo $row['last_name']; ?>">
			<h2>fecha de nacimiento</h2>
			<input type="date" placeholder="" name="date1" value="<?php echo $row['date1']; ?>">
			<input type="text" name="target" placeholder="Targeta de credito" min="00000000000" max="99999999999" value="<?php echo $row['target']; ?>">
			<input type="text" name="security" placeholder="Codigo de seguridad" min="000" max="999" value="<?php echo $row['security']; ?>">
			<input type="number" name="code" placeholder="cantidad" max="10" min="1" value="<?php echo $row['number']; ?>">
			<input type="text" name="raza" value="<?php echo $row['raza']; ?>">
			<button><a href=""></a>Comprar</button>
		</form>
	</div>

	<?php 
		if($_POST){
			$name=$_POST['name'];
			$last_name=$_POST['last_name'];
			$date1=$_POST['date1'];
			$target=$_POST['target'];
			$security=$_POST['security'];
			$code=$_POST['code'];
			$raza=$_POST['raza'];

			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"UPDATE regdate_2 SET name='$name',
				last_name='$last_name' , date1='$date1', target='$target' ,
				security='$security', code='$code' , raza='$raza' where  id=$id; ");

			if($query){
				echo "registro";
			}else{
				echo "no regists	ro";
			}



		}else{
			echo "no entro en get";
		}
	 ?>

	
</body>
</html>