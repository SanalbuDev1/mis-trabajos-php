<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php if($_GET){

		$id = $_GET['id'];
		$con = mysqli_connect("localhost","root","","proy7");
		$consultar = mysqli_query($con, "SELECT * FROM alquiler WHERE id = $id");
		$row = mysqli_fetch_array($consultar);
	}
?> 
	

	<h1>Usuarios</h1>
	<a href="index.php">Regresar</a>
	<hr>
	<form method="post">
		<div>
			<label>id_cedula</label>
			<input type="text" placeholder="Nombres" name="id" value="<?php echo $row['id']; ?>">
		</div>
		
		<div>
			<label>Nombres</label>
			<input type="text" placeholder="E-Mail" name="nombre" value="<?php echo $row['nombre']; ?>">
		</div>
		<div>
			<select name="alquiler1" id="" values="<?php echo $row['alquiler']?> ">
				<option value="Cabaña 1 , valor 322000 noche">Cabaña 1 , valor 322000 noche</option>
				<option value="Cabaña 2 , valor 100000 noche">Cabaña 2 , valor 100000 noche</option>
				<option value="Cabaña 3 , valor 200000 noche">Cabaña 3 , valor 200000 noche</option>
				<option value="Cabaña 4 valor 500000 noche">Cabaña 4 valor 500000 noche</option>
			</select>
		</div>
		
		<div>
			<label>Noches</label>
			<input type="number" placeholder="Noches" name="noches" value="<?php echo $row['noches']; ?>">
		</div>
		<div>
			<label>fecha</label>
			<input type="date" placeholder="Documento" name="date1" value="<?php echo $row['date1']; ?>">
		</div>
		<div>
			<select name="pago" id="" value="pago">
				<option value="Targeta credito Bancolombia">Targeta credito Bancolombia</option>
				<option value="Efectivo">Efectivo</option>

			</select>
		</div>
		<input type="submit">
	</form>
	
	<?php 
		if ($_POST) {
		
		$nombre = $_POST['nombre'];
		$alquiler1 = $_POST['alquiler1'];
		$noches = $_POST['noches'];
		$date1 = $_POST['date1'];
		$pago = $_POST['pago'];

		$con = mysqli_connect("localhost","root","","proy7");
		$query = mysqli_query($con, "UPDATE alquiler SET id = '$id', nombre = '$nombre', alquiler1 = '$alquiler1', noches = '$noches', date1 = '$date1', pago = '$pago' WHERE id = $id");
		}
		if($query){
			echo "modifico correctamente";
		}else{
			echo "no modifico correctamente";
		}
	 ?>
</body>
</html>