<?php 

	class persona {

		public $nombre;

		public function hablar($nombre){
			$this->nombre=$nombre;
		}
		public function hablar2(){
			echo $this->nombre;
		}

	}

	class persona2 extends persona{

	}

	$persona = new persona();
	$persona->hablar("rober");
	echo $persona->nombre."<br>";
	echo $persona->nombre."<br>";
	echo $persona->nombre."<br>";

	$persona->hablar2();


	$persona2= new persona();
	echo $persona2->nombre;
	echo $persona->nombre."<br>";
	
	
 ?>