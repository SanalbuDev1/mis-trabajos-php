<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
	<fieldset>
		<legend><h1>Calcular dias vividos</h1></legend>
		<input type="text" name="dia" placeholder="Dia">
		<input type="text" name="mes" placeholder="Mes">
		<input type="text" name="ano" placeholder="Año">
		<br>
		<input type="submit" value="calcular">


	</fieldset>
	</form>
	<?php 
      if($_POST){
      	$dia = $_POST['dia'];
      	$mes = $_POST['mes'];
      	$ano = $_POST['ano'];

      	$factual = mktime(0,0,0,date('d'),date('m'),date('Y'));
      	$fnacim = mktime(0,0,0,$dia,$mes,$ano);

   		$ftotal = $factual - $fnacim ;
   		$ftotal = ((($ftotal / 60) / 60)/24)/365;

   		echo "<h1>".floor($ftotal)."</h3>";
      }
	 ?>
</body>
</html>