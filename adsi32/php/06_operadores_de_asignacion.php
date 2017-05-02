<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style>
	table{
			border-collapse: collapse;
			margin:20px auto;
		}
		table tr, table tr td{
			background-color: #ddd;
			border: 1px solid #ccc;
			color: #666;
			padding: 15px;

		}
		h1{
			text-align: center;
			
		}
</style>
	<h1>operadores de asignacion</h1>

	<table>
		<tr>
			<td>Operador</td>
			<td>Ejemplo</td>
			<td>Es igual que</td>
		</tr>
		<tr>
			<?php 
			$x = 2;
			$y = $x;

			 ?>
			<td>=</td>
			<td>x + y</td>
			<td><?php echo $x=$y ?></td>
		</tr>
		<tr>
		<?php 
			

			$x +=$y;

		?>
			<td>+x</td>
			<td>x+=y</td>
			<td><?php echo $x ?></td>
		</tr>
		<tr>
		<?php 
			

			$x -=$y;

		?>
			<td>-x</td>
			<td>x-=y</td>
			<td><?php echo $x ?></td>
		</tr>
		<tr>
		<?php 
			

			$x *=$y;

		?>
			<td>*x</td>
			<td>x*=y</td>
			<td><?php echo $x ?></td>
		</tr>
		<tr>
		<?php 
			$x = 2;
			$y = $x;

			$x /=$y;

		?>
			<td>/x</td>
			<td>x/=y</td>
			<td><?php echo $x ?></td>
		</tr>
		<tr>
		<?php 
			

			$x .=$y;

		?>
			<td>.x</td>
			<td>x.=y</td>
			<td><?php echo $x ?></td>
		</tr>
		<tr>
		<?php 
			

			$x %=$y;

		?>
			<td>%x</td>
			<td>x%=y</td>
			<td><?php echo $x ?></td>
		</tr>
	</table>
</body>
</html>