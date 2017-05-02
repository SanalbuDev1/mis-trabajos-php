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
				
			}
		}
		public function desconexion(){
			mysqli_close($this->conx);
		
		}
	}

	//clase concreta

	class Usuarios extends BaseDatos{
		public function __construct($h,$u,$p,$b){
			parent::__construct($h,$u,$p,$b);
			parent::conexion();
		}

		public function getUsuarios(){
			return $this->conx->query("SELECT * FROM * usuarios");
		}

	}

	$user = new Usuarios("localhost","root","admin","adsi1132816");
	$user->desconexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Usuarios</h1>
	<ul>
		<?php 
			$user = new Usuarios();
			$usuarios = $user->getUsuarios();
		 ?>
		 <?php foreach($usuarios as $us): ?>
		 <li><?php echo $us['name'] ?></li>
		<?php endforeach ?>
		<?php $user->desconexion(); ?>

	</ul>
</body>
</html>

