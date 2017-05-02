<?php 
	class Vehiculo{
		protected $marca;
		protected $referencia;

		public function __construct($mar,$ref){
			$this->marca=$mar;
			$this->referencia=$ref;
		}

		public function getVehiculo(){
			echo "<li> <strong>La referencia es:</strong>".$this->referencia."</li>";
		}
}

	class Mini extends Vehiculo{
		public function getVehiculo(){
			echo "<li> <strong>La marca es:</strong>".$this->marca."</li>";
				parent::getVehiculo();
		}
	}

	$vh = new Mini('Mini','Cooper');
	$vh->getVehiculo();