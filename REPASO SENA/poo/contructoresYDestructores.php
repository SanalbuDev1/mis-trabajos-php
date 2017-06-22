<?php 	

	class loteria{

		public $num;
		public $inte;
		public $resultado = false;

		public function __construct($n,$i){
			$this->num = $n;
			$this->inte = $i;
		}

		public function sortear(){
			if ($this->resultado == false) {
				$minimo = $this->num / 2;
				$maximo = $this->num * 2;
			


				for ($i=0; $i < $this->inte; $i++) {
			    $int = rand($minimo,$maximo);
			 	self::intentos($int);
			   } 
			}
			
		}

		public function intentos($int){
			if ($this->resultado == false) {
				if ($int == $this->num) {
				echo "<b>". $int . "==" . $this->num . "</b> <br>";
				$this->resultado=true;
				}else{
				echo "<b>". $int . " != " . $this->num . "</b> <br>";
				}
			}
			
		}

		public function __destruct(){
			if ($this->resultado) {
				 echo "ganaste perro , intentos" . $this->inte ;
			}else{
				echo "no gano , intentos" . $this->inte ;
			}
		}

	}

	$lot = new loteria(2,20);
	$lot->sortear();

 ?>