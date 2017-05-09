<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="index.php">Volver a inicio</a>
	<style>
		nav{
			margin:20px auto;
			width: 200px;
			height: 300px;
		}
	</style>
	
	<nav>	
		<form method="POST" action="">
			<input type="number" placeholder="cedula" name="id">
			<input type="text" name="nombre" value="nombre">
			
			<select name="alquiler1" id="">
				<option value="cabaña 1 , valor 322000 noche">cabaña 1 , valor 322000 noche</option>
				<option value="cabaña 2 , valor 100000 noche">cabaña 2 , valor 100000 noche</option>
				<option value="cabaña 3 , valor 200000 noche">cabaña 3 , valor 200000 noche</option>
				<option value="cabaña 4 valor 500000 noche">cabaña 4 valor 500000 noche</option>
			</select>
			<input type="number" placeholder="noches que se quedara" name="noches">
			<label for="">fecha</label><input type="date" name="date1" >	

			<select name="pago" id="">
				<option value="Targeta credito Bancolombia">Targeta credito Bancolombia</option>
				<option value="Efectivo">Efectivo</option>

			</select>

			<input type="submit" value="Registrar">
			</form>
	</nav>

	<?php 
		if($_POST){$id= $_POST['id'];
		$nombre = $_POST['nombre'];
		$alquiler1 = $__halt_compiler(oid)OST['alquiler1'];
		$noches = $_POST['noches'];
		$date1 = $_POST['date1'];
		$pago = $_POST['pago'];


		if($nombre != "" && $alquiler1 != "" && $noches != "" && $date1 != "" && $pago != ""){
			$con=mysqli_connect("localhost","root","","proy7");
			$query = mysqli_query($con , "INSERT INTO alquiler VALUES('$id','$nombre','$alquiler1','$noches',
				'$date1','$pago')");

			if($query){
				echo "Registrado correctamente";
			}else{
				echo "Registro no fue exitoso";
			}

		}}
		
	 ?>
</body>
</html>