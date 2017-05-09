<?php 
	
	class Persona_computer {
		private $procesador;
		private $memoriaRam;
		private $discoDuro;

		public function __construct($pro , $mem , $dis){
			$this->procesador=$pro;
			$this->memoriaRam=$mem;
			$this->discoDuro=$dis;
		}

		//Metodo estatico muestra error

		public static function getPc(){
			return "Procesador :".	$this->procesador . 
			"MemoriaRam".$this->memoriaRam  . 
			"DiscoDuro". $this->discoDuro;
		}

		public static function setInfoPc($pro,$mem,$dis){
			return "Procesador :". $pro . 
			"MemoriaRam".$mem . 
			"DiscoDuro". $dis;
		}
	}

$pc = new Persona_computer("AMD_A8" , "8GB" , "1TERA");
//echo $pc->getPc(); Los metodos estaticos no pueden reconocer los atributos de la clase

//echo Persona_computer::setInfoPc("AMD A8" , "16GB" , "4TERA");

