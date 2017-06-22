<?php 

	abstract class molde{
		abstract public function ingnom($asasd);
		abstract public function obtenerNom();

		public static function nom($n){
			echo $n;
		}
	}

	class moldesito extends molde{
		private $mensaje = "hola";
		private $nombre ;

		public function mostrar(){
			echo $this->mensaje;
		}
		public function ingnom($nom){
			$this->nombre = $nom;
		}
		public function obtenerNom(){
			echo $this->nombre;
		}
	}

	$obj = new moldesito();
	$obj->mostrar();
	$obj->ingnom("rob");
	$obj->obtenerNom();



 ?>
