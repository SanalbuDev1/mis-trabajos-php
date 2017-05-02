<?php 	
	class vehiculo{
		private $tipo;
		private $marca;
		private $referencia;

		public function __construct($marca,$refe,$tipo= 'renult 4'){
				$this->tipo=$tipo;
				$this->marca=$marca;
				$this->referencia=$refe;
		}

		public function getVehiculo(){
			echo "Tipo:".$this->tipo."<br>";
			echo "Tipo:".$this->marca."<br>";
			echo "Tipo:".$this->referencia->getReferencia()."<hr>";

		}
	}

	class Volkswagen{
		private $referencia;
		public function __construct($ref){
				$this->referencia = $ref;
		}
		public function getReferencia(){
			if ($this->referencia==1) return 'Gol';
			if ($this->referencia==2) return 'Jetta';
			if ($this->referencia==3) return 'Polo';

		}
	}

	$vk1 = new Volkswagen(1);
	$vh1 = new vehiculo('volkswagen',$vk1);
	$vh1->getVehiculo();

	$vk2 = new Volkswagen(2);
	$vh2 = new vehiculo('volkswagen',$vk2,'Coupe');
	$vh2->getVehiculo();


	$vk3 = new Volkswagen(3);
	$vh3 = new vehiculo('volkswagen',$vk3,'Hervy');
	$vh3->getVehiculo();
