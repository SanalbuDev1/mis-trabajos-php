<?php 

	class Conexion extends mysqli{

		private $DB_HOST = 'localhost';
		private $DB_USER = 'root';
		private $DB_PASSWORD = '';
		private $DB_NAME = 'repaso';

		public function __construct(){
			parent:: __construct($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD,$this->DB_NAME);

			$this->set_charset('utf-8');
			$this->connect_errno ? die('Error en la Conexion' . mysqli_connect_errno()) : $m = 'conectado';

		
		}

	}

 ?>