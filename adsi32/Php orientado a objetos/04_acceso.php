<?php 

	class Persona {
		private $nombre;
		private $edad;
		public $documento;

		public function __construct($nom,$eda,$doc){
			$this->nombre=$nom;
			$this->edad=$eda;
			$this->documento=$doc;
		}

		private function getDocumento(){
			return $this->documento;
		}

		private function getNombre(){
			return $this->nombre;
		}

		private function getEdad(){
			return $this->edad;
		}

		public function printt(){
			echo $this->getDocumento()."<br>";
			echo $this->getNombre()."<br>";
			echo $this->getEdad()."<br>";
			
		}



	}
		$per = new Persona("Santiago",19,1060655854);
		$per->printt();
	

