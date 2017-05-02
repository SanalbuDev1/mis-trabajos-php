<?php 

	Class Catalogo{
		public $disquera;
		public $artista = array();
		public $album = array();
		public $genero = array();
		public $ano = array();

		public function __construct($dis){
			$this-> disquera = $dis;
		}
		public function setCatalogo($art,$alb,$gen,$anos){
			$this-> artista[] = $art;
			$this-> album[] = $alb;
			$this-> genero[] = $gen;
			$this-> ano[] = $anos;

		}

		public function getCatalogo(){
			echo "<h2>".$this->disquera."</h2>";
			for ($i=0; $i < count($this->artista) ; $i++) { 
				echo "<ul>";
				echo "<li> Artista ".$this->artista[$i]."</li>";
				echo "<li> album ".$this->album[$i]."</li>";
				echo "<li> Genero ".$this->genero[$i]."</li>";
				echo "<li> Ano ".$this->ano[$i]."</li>";
				echo "</ul>";
			
			}
		}
	}	

	$cat = new Catalogo('Bananas');
	$cat -> setCatalogo('Leo Jimenez', 'Animal Solitario', 'Rock', 2013);
	$cat -> setCatalogo('Jesse y joy', 'Con quien se queda el perro', 'Pop', 2011);
	$cat -> setCatalogo('Mana', 'Cama Incendiada', 'Rock', 2015);
	$cat -> setCatalogo('Dread Mar I', 'En el Sendero', 'Reggue', 2014);
	$cat -> setCatalogo('Akash', 'Mas Alla de la Realidad', 'Rock', 2003);
	$cat -> setCatalogo('Alejandra Guzman', 'A Flor de Piel', 'Pop', 1991);
	$cat -> setCatalogo('Kraken', 'Piel de Cobre', 'Rock', 1987);
	$cat -> setCatalogo('Ha ash', 'Habitacion Docle', 'Pop', 2008);
	$cat -> setCatalogo('San Alejo', 'Seguir Latiendo', 'Pop', 2016);
	$cat -> setCatalogo('Evanescence', 'Origin', 'Rock', 2000);
	$cat -> setCatalogo('Los de Adentro', 'Volver Amar', 'Rock', 2004);
	$cat -> setCatalogo('Mojito lite', 'Nada es Demasiado', 'Pop', 2015);
	$cat -> setCatalogo('Siam', 'Nuestra Historia', 'Pop', 2015);
	$cat -> setCatalogo('Anahi', 'Inesperado', 'Pop', 2016);
	$cat -> setCatalogo('Dulce Maria', 'DM', 'Pop', 2017);
	$cat -> setCatalogo('El Canto del Loco', 'A Contracodiente', 'Rock', 2002);
	$cat -> setCatalogo('Santiago Cruz', 'Solo Hasta Hoy', 'Pop', 2010);
	$cat -> setCatalogo('Ricardo Arjona', '5to Piso', 'Pop', 2008);
	$cat -> setCatalogo('Melendi', 'Mientras No Cueste Trabajo', 'Pop', 2006);
	$cat -> setCatalogo('Juan Fernando Velasco', 'Tanto Amor', 'Pop', 2007);
	$cat ->getCatalogo();
		