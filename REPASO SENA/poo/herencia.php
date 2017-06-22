<?php 

	class vehiculo{
		public $motor = false;
		public $marca;
		public $color;

		public function estado(){
			if ($this->motor) {
				echo "el motor esta encendido <br>";
			}else{
				echo "el motor esta apagado<br>";
			}
		}

		public function encender(){
			if (!$this->motor) {
				echo "El motor ahora esta encendido<br>";
				$this->motor=true;
			}
		}		
	}

	class moto extends vehiculo{
		public function estadoM(){
			self::estado();
		}
	}

	$veh = new vehiculo();
	$veh->estado();
	$veh->encender();
	$veh->estado();


	$mot = new moto();
	$mot->estadoM();
	

 ?>