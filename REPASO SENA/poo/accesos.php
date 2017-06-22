<?php 
	
	class persona {

		public $public ;
		private $private ;
		protected $protected;

		public function __construct($p,$p2,$p3){
			$this->public = $p;
			$this->private = $p2;
			$this->protected = $p3;
		}

		public function mostrar($p){
			echo "<h1>".$this->public."</h1><br>";
			echo "<h1>".$this->private."</h1><br>";
			echo "<h1>".$this->protected."</h1>";

			persona::persona2($p);

		}

		protected function persona2($p){

			
				echo "<h1>".$this->public = $p."</h1><br>";
				echo "<h1>".$this->private."</h1><br>";
			    echo "<h1>".$this->protected."</h1>";
			

		}

	}

	class persona2 extends persona{
		public function __construct(){
			parent::__construct("jajaja","¿asd","asda");
		}
		
	}

	$persona = new persona("public","private","protected");
	$persona->mostrar("cambie perro");

	echo $persona->public;
	// echo $persona->private;
	// echo $persona->protected;

	// $persona->persona2();

	$persona2 = new persona2("public","private","protected");
	$persona2->mostrar("ja");

 ?>