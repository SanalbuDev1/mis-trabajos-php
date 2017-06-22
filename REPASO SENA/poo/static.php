<?php 

	class estatica{
		public $nombre = "Santiago";
		public static $apellido = "Alvarez";

		public function bienvenida(){
			echo "bienvenido : " . $this->nombre . "su apellido es " . estatica::$apellido;
		}

		
	}

	class segundoApellido extends estatica{
		public /*static*/ function llamar(){
			echo self::$apellido;
			echo $this->nombre; // si fuera static no se puede llamar

		}
	}

	$es = new estatica();
 	$es->bienvenida();

 	$se = new segundoApellido();
 	$se->llamar();

 ?>