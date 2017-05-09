<?php 

	abstract class BaseDatos{
		protected $con;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($h,$u,$p,$s){
			$this->host =$h;
			$this->user =$u;
			$this->pass =$p;
			$this->nmbd =$s;
		

		}

		public function conexion(){
			$this->conx =new mysqli($this->host,$this->user,$this->pass,$this->nmbd);
			if($this->conx){
				echo "<li>Se ha conectado a la base de datos con exito</li>";
			}
		}
		public function __destruct(){
			mysqli_close($this->conx);
			echo "<li>Se ha desconectado con exito</li>";
		}
	}

	//clase concreta

	class Usuarios extends BaseDatos(){
		public function __construct($h,$u,$p,$s){
			parent::conexion();
			parent::__construct($h,$u,$p,$s);
		}
	}

	$user = new Usuarios("localhost","root","admin","adsi1132816");
	


