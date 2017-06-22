<?php 


	//variable strlen()
	echo "hola que mas";
	echo strlen("hola que mas");
	$txt = "Hola que mas";
     
    //variable strpos() busca la primera letra coincidente
    echo strpos("Holsa", "a");
?>
<br>
<h1>Operadores</h1>
<?php  
    $int = 0;
    $int++;
?>
  <h1>Numero a incrementar cuando era 0</h1><?= $int;?>

  <h1>Operadores logicos , switch</h1>

<?php 
	
	$numero = 4;
	switch ($numero) {
		case 0:
			echo "<h1>oe soy el primero</h1>";
			break;
		
		case 1:
			echo "<h1>oe soy el segundo</h1>";
			break;
		default :
			echo "<h1>oe soy el colado</h1>";
		break;
	}


 ?>
 	<h1>otro ejemplo de if</h1>
 <?php 

 	$date = date("D");
 	if ($date=="Sun") {
 		echo "Estoy en la fecha que es ";
 	}

  ?>

  <h1>Matrices importante el tema</h1>
  <form action="" method="get">
  	<input name="frutas" type="text" value="frutas">
	<input type="submit" value="ingresar">
	<input type="hidden" name="accion" value="<?= $i ?>">

  </form>
  <?php 

  	if ($_GET) {


  		$frutas = $_GET['frutas']; 	
  		$arreglo =  array("Manzana" , "Pera");  		


  		 for ($i=0; $i < count($arreglo) ; $i++) { 
  		 	echo $arreglo[$i]."<br>";
  		 }	

			  		  		
  	}
 


   ?>


   <h1>Funciones</h1>

   <?php 
   
    function soy($a , $b ,$d){
   	 $contador = 0;
   	 echo $c = $a * ($b + $d) ."contador". $contador;
   	 $contador ++;
   	 	 
   }

   
   soy(1,4,2);


   // class soy{
   // 		private $contador;
   // 	 	public function contador($contador){
   // 	 		$this->contador = $contador;
   // 	 	}
   // 	 	public function getContador(){
   // 	 		echo $this->contador;
   // 	 	}
   // }

   
   // $datos = new soy();
   // $datos->contador(4);
   // $datos->getContador();

    ?>
	
  <h1>matrices</h1>

  <?php 

    $array2 = array("holaaa","hola2");
    echo $array2[0];

    $arrayName = array('nombre' => "roberto" , 'nombre2'=>"sandra" );
    echo $arrayName['nombre'];

    echo count($array2);
    echo count($arrayName);


   ?>

	<h1>formularios</h1>

	<form action="" method="post">
		<input type="text" value="nombre" name="name">
		<input type="submit" value="valor">
	</form>

	<?php 

	if ($_POST) {
		echo $_REQUEST['name'];
	}

	 ?>


   <h1>fechas y horas</h1>


   <?php 

   echo date("D/M/y")."<br>";
   echo date("d.m.Y")."<br>";
   echo date("d-m-Y");

   $manana = mktime('hour', 'minute', 'second', 'month', 'day','year');
   echo "Mañana es: ".date("d/m/Y", $manana);

    ?>

  <h1>abrir archivos</h1>

  <?php 

    $archivo= fopen("contenido.txt", "a+");
    fputs($archivo,"pruebas");
    fclose($archivo);

    echo "exito"

   ?>
 
  <h1>cookies</h1>

  <?php 

   setcookie("USUARIO" , "ROBERTO" , time()+52200);
   echo $_COOKIE['USUARIO'];
   ?>
  
  <h1>correo electronico</h1>

  <?php 

    mail("salvarez18@misena.edu.co","jaja","kjajaja","salvarez18@misena.edu.co");

   ?>


   <h1>exepciones</h1>

   <?php
   function verificarNum($numero) 
         {
          if($numero > 1){
                    
             throw new Exception("El númerosd debe ser 1 o menor");
          }
    return true;
  }
  try{
    verificarNum(2);
    echo "si usted ve esto el numero es 1 o menor que 1 ";
  }

  catch(Exception $e){
    echo "mensaje : ".$e->getMessage();
  }
    verificarNum(0);




   ?>