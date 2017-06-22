<?php 

	class colaboreme {
		public $pesos;
		public function colaborar($pesitos){
			echo "ya tengo ".$this->pesos+=$pesitos; 
		}
	}

	class donar{
		public $mensaje = "soy todo bien";
		public $pesos ;
		public $col;

		public function __construct($pesos){
			$this->col = new colaboreme();
			$this->pesos = $pesos;
		}

		public function colaborar2(){
			$this->col->colaborar($this->pesos);
		}
	}

	$obj = new donar(1000);
	echo $obj->mensaje;
	$obj->colaborar2()

 ?>