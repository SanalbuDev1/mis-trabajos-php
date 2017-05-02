<?php 	
	class admin{

		protected $nombre;
		protected $edad;

		public function __construct($nom,$eda){
				$this->nombre=$nom;
				$this->edad=$eda;
		}

		public function getDatosAdmin(){
			echo "<li>El nombre es ".$this->nombre."</li>";
			echo "<li>la edad es ".$this->edad."</li>";
		}

	}

	class empleado extends admin{
		public function __construct(){
			parent::__construct("paola",19);

		}
	}

	$emp = new empleado("himmlar",19);
	$emp->getDatosAdmin();