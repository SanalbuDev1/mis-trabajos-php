<?php 	

	class persona{

		public $nombre = array();
		private $apellido = array();

		public function guardar($nombre,$apellido){
			$this->nombre[]=$nombre;
			$this->apellido[]=$apellido;
		}

		public function mostrar(){
					for ($i=0; $i <count($this->nombre) ;$i++) { 
						  self::formato($this->nombre[$i] ,$this->apellido[$i]);
	
					} 
		}

		public function formato($nom,$ape){
					// echo "nombre :".$this->nombre . " Apellido:".$this->apellido;
					echo "<h1>nombre :".$nom . " Apellido:".$ape."</h1>";
					var_dump($this->nombre);

		}

		

	}

	$persona = new persona();
	$persona->guardar("carlos","fernandez");
	$persona->guardar("2","2");
	$persona->guardar("roberto","jaja");
	$persona->mostrar();



 ?>