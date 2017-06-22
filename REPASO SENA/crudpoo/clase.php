<?php 
	
	class Conexion extends mysqli{

		private $DB_HOST = 'localhost';
		private $DB_USER = 'root';
		private $DB_PASSWORD = '';
		private $DB_NAME = 'repaso';

		public function __construct(){
			parent:: __construct($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD,$this->DB_NAME);

			

		
		}

	}

	class repaso{
		public $id;
		public $correo;
		public $contra;
		public $image;

		public function __construct($correo,$contra,$image = "img/nada.jpg",$ida=""){
			$this->correo = $correo;
			$this->contra = $contra;
			$this->image = $image;
			$this->id = $ida;
		}

		static function index(){
			return new repaso('','','','');
		}

		public function select(){
			$db = new Conexion();
			$sql = 'SELECT * FROM repasot';
			$result = $db->query($sql);
			return $result;
		}	

		//consultar

		static function consultar($id){
			return new repaso('','','',$id);
		}

		public function selectId(){
			$db = new Conexion();
			$sql = "SELECT * FROM repasot WHERE id=$this->id";
			$result = $db->query($sql);
			return $result;
		}

		//adicionar

		public function add(){
			$db = new Conexion;
			$sql = "INSERT INTO repasot VALUES (DEFAULT,'$this->correo','$this->contra','$this->image')";

		
			if ($db->query($sql)) {
					$m='Insertado';
				}
                                
			$m=='Insertado' ? $r= "<script>window.location.replace('index.php?ver=add')</script>" : $r = 'No salio';

			echo $r;
		}

		public function addsinimagen(){
			$db = new Conexion;
			$this->image = "imgs/nada.jpg";
			$sql = "INSERT INTO repasot VALUES (DEFAULT,'$this->correo','$this->contra','$this->image')";
			var_dump($sql);


			$db->query($sql) ? $m= 'Insertado' : $m = "Hubo un error";		
                                
			$m=='Insertado' ? $r= "<script>window.location.replace('index.php?ver=add')</script>" : $r = 'No salio';

			echo $r;
		}

		public function eliminar(){

			$db = new Conexion();
			$sql = "DELETE  FROM repasot WHERE id=$this->id";
			$db->query($sql);

			if($db->query($sql)){
				echo "<script>window.location.replace('index.php?el=eliminado')</script>";
			}else{
				echo "no se elimino";
			}

		}
	}

 ?>