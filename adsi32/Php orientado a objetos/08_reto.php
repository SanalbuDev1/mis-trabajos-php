<?php 	
		class operacion{
			protected $num1;
			protected $num2;
			protected $res;

			public function __construct($n1,$n2){
					$this->num1=$n1;
					$this->num2=$n2;
			}

			public function getOperacion(){
					return $this-> res;
			}
		}

		class suma extends operacion{
			public function calcular(){
				$this->res=$this->num1+$this->num2;				
			}

		}

		class resta extends operacion{
		public function calcular(){
				$this->res=$this->num1-$this->num2;				
			}
		}

		class divicion extends operacion{
		public function calcular(){
				$this->res=$this->num1/$this->num2;				
			}
		}

		class multiplicacion extends operacion{
		public function calcular(){
				$this->res=$this->num1*$this->num2;				
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="GET">
			<select name="op" id="">
				<option value="1">Suma</option>
				<option value="2">Resta</option>
				<option value="3">divicion</option>
				<option value="4">multiplicacion</option>
			</select>
			<input type="number" placeholder="Numero1" name="num1">
			<input type="number" placeholder="Numero2" name="num2">
			<input type="submit" value="boton">
	</form>
</body>
</html>

<?php 	
		if($_GET){
			$op=$_GET['op'];
			$n1=$_GET['num1'];
			$n2=$_GET['num2'];
		}

		if ($op == '1') {
			$op = new suma($n1,$n2);
			$op->calcular();
			echo "La suma es igual a".$op->getOperacion();
		}
		if ($op == '2') {
			$op = new resta($n1,$n2);
			$op->calcular();
			echo "La resta es igual a".$op->getOperacion();
		}
		if ($op == '3') {
			$op = new divicion($n1,$n2);
			$op->calcular();
			echo "La divicion es igual a".$op->getOperacion();
		}
		if ($op == '4') {
			$op = new multiplicacion($n1,$n2);
			$op->calcular();
			echo "La multiplicacion es igual a".$op->getOperacion();
		}

 ?>