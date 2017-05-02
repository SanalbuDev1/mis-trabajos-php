<?php
	class Evolucionar{
		public function evolucionarPokemon($nom,$evo){
			echo "<li>".$nom."ha evolucionado a un".$evo."</li>";
		}
	}
	class Pokemon{
		private $nombre;
		private $evolucion;
		private $colaboracion;

		public function __construct($nom,$evo){
			$this->nombre=$nom;
			$this->evolucion=$evo;
			$this->colaboracion = new Evolucionar();
		}

		public function evoPokemon(){
			$this->colaboracion->evolucionarPokemon($this->nombre,$this->evolucion);
		}
	}

	$pok1 = new Pokemon("pikachu","raichu");
	$pok1->evoPokemon();

	$pok2 = new Pokemon("pichu","pikachu");
	$pok2->evoPokemon();
	


	



