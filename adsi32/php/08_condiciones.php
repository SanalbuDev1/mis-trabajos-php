<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$trompas = "presidente";
		$muro = "tumbao";
	 ?>
	<style>
		table{
			text-align: center;
			border-collapse: collapse;
			background-color: #802424;
			border:2px solid black;
		}
		table td{
			border:2px solid black;
		}
	</style>
	 <table>
	 	<tr>
	 		<td>if</td>
	 		<td>Condicion</td>
	 		<td colspan="2" >respuesta</td>
	 		
	 	</tr>
	 	<tr>
	 		<td>if</td>
	 		<td>Condicion</td>
	 		<td>$trompas != $murito</td>
	 		<td><?php if ($trompas != $muro) {
	 			echo "Se salvo el murito";
	 		} ?></td>
	 	</tr>
	 	<tr>
	 		<td>else</td>
	 		<td>condicion</td>
	 		<td>$trompas != murito</td>
	 		<td><?php  if ($trompas == $muro) {
	 			echo "se salvo el hermoso";
	 		}else{
	 			echo "Se callo el murito";
	 			} ?></td>
	 	</tr>
	 	<tr>
	 	<?php 
	 		$mexicano = "muerte a trompas";
	 	 ?>
	 		<td>elseif</td>
	 		<td>condicion</td>
	 		<td>$trompas == $muro</td>
	 		<td><?php if ($trompas == $muro){

	 		}elseif ($trompas != $mexicano) {
	 			echo "Pobre trompas";
	 		} {
	 			# code...
	 		} ?></td>
	 	</tr>

	 	<tr>

	 		<td>Swithch</td>
	 		<td>Condicion</td>
	 		<td>case a</td>
	 		<td><?php switch ($trompas) {
	 			case 'presidente':
	 				echo "soy trompas";
	 				break;
	 			
	 			default:
	 				# code...
	 				break;
	 		} ?></td>
	 	</tr>
	 </table>
</body>
</html>