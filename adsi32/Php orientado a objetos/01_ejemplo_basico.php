<?php
	class Pokemon{
		// Atributos 
		public $nombre;
		public $tipo;
// Metodos
		public function setPokemon($nom, $tip){
			$this->nombre = $nom;
			$this->tipo = $tip;
		}
		public function getPokemon(){
			return "<li>Nombre: ".$this->nombre."</li><li>Tipo: ".$this->tipo."</li>";
		}
	}
	// Crear Objeto
	$pk = new pokemon;
	$pk->setPokemon('Pikachu', 'Electrico');
	//Acceso a un atributo publico
	echo $pk->nombre;
	// Acceso a un metodo
	echo "<ul>".$pk->getPokemon()."</ul>";
	//echo "<ul>".$pk->getPokemon()."</ul>";