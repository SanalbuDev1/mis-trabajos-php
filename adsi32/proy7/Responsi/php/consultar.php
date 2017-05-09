<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form method="get">
	<input type="number" name="id">
	<input type="submit" value="consultar">
</form>
<table border="2px">
<tr><td>nombre</td><td>apellidos</td><td>fecha</td><td>target</td><td>security</td><td>code</td><td>raza</td></tr>
	<?php 
		if ($_GET) {
			$id=$_GET['id'];

			$con=mysqli_connect('localhost','root','','reddate');
			$query=mysqli_query($con,"SELECT * FROM regdate_2 WHERE id=$id");
			$row=mysqli_fetch_array($query);

		}
	 ?>
	<tr><td><?php echo $row['name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['date1']; ?></td>
	<td><?php echo $row['target']; ?></td>
	<td><?php echo $row['security']; ?></td>
	<td><?php echo $row['code']; ?></td>
	<td><?php echo $row['raza']; ?></td>





	</tr> 
	</tr> 
</table>
</body>
</html>