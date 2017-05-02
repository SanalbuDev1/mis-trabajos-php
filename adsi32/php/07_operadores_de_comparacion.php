<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style>,
		table{
			border-collapse: :collapse;
		}
		table tr , table td {
			border:1px solid rgba(0,0,0,0.6);
			background-color: rgba(155,155,155,1);
		}
		table tr:first-child td {
			background-color: #515731;
		}
	</style>
	<table>
		<tr>

			<td>Operador</td>
			<td>Descripcion</td>
			<td>Operador</td>
			<td>Boleano</td>
		</tr>
		<tr>
		<?php 
			$x = 5;
			$y = 8;
			
		 ?>
			<td>==</td>
			<td>Es igual</td>
			<td><?php echo $x."==".$y ?></td>
			<td><?php echo var_dump($x==$y)?></td>
		</tr>
		<tr>
		
			<td>!=</td>
			<td>Diferente</td>
			<td><?php echo $x."!=".$y ?></td>
			<td><?php echo var_dump($x!=$y) ?></td>
		</tr>
		<tr>
			<td> < > </td>
			<td>diferente</td>
			<td><?php echo $x."<>".$y ?></td>
			<td><?php echo var_dump(5<>8) ?></td>
		</tr>
		<tr>

			<td> > </td>
			<td>mayor</td>
			<td><?php echo $x.">".$y ?></td>
			<td><?php echo var_dump($x>$y) ?></td>
		</tr>
		<tr>
			<td> < </td>
			<td>menor</td>
			<td><?php echo $x."<".$y ?></td>
			<td><?php var_dump($x<$y) ?></td>
		</tr>
		<tr>
			<td> >= </td>
			<td>Mayor o Igual</td>
			<td> <?php echo $x.">=".$y ?> </td>
			<td><?php echo var_dump($x>=$y) ?></td>
		</tr>
		<tr>
			<td> <= </td>
			<td> Menor o igual</td>
			<td> <?php echo $x."<=".$y ?> </td>
			<td> <?php var_dump($x<=$y) ?> </td>
		</tr>
	</table>
</body>
</html>