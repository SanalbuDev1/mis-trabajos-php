<?php 

	interface auto{
		public function encender();
		public function apagar();
	}

	interface gasolina extends auto{
		public function vaciarTanque();
		public function llenarTanque($galones);
	}

	class cuatrimoto implements gasolina{

		private $estado = false;
		private $gasolina = 0;

		public function estado(){
			if ($this->estado) {
				echo "el auto esta encendido";
			}else{
				echo "el auto esta apagado";
			}
		}

		public function vaciarTanque(){
			$this->gasolina = 0;
		}
		public function llenarTanque($galones){
			$this->gasolina = $galones;
		}
		public function encender(){
			if(!$this->estado && $this->gasolina>0){
				echo "auto encendido y tiene ". $this->gasolina;
				$this->estado = true;
			}else{
				echo "el auto no tiene gasolina";
			}
		}
		public function apagar(){
			if ($this->estado) {
				echo "auto apagado";
				$this->estado = false;
			}
		}
		public function usar($km){
			if ($this->estado) {
				$reducir = $km / 3;
				$this->gasolina-=$reducir;
				echo "el auto tiene actualmente " . $this->gasolina;

				if ($this->gasolina <= 0) {
				echo "el auto se quedo sin gasolina";
				$this->estado = false;
				}
			}
		}
	}

	$carro = new cuatrimoto();
	$carro->llenarTanque(10);
	$carro->encender();
	$carro->usar(10);
	$carro->usar(30);
	$carro->encender();

 ?>