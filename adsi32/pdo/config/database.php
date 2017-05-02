<?php 




	try {
		$con = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
		$con->exec('set names utf8');
			
	} catch (PDOException $e) {
		echo $e->getMessage();		
	}





	


function login($con,$correo,$clave){
	try {
		$sql="SELECT * FROM clientes WHERE correo=:correo and
								clave=:clave LIMIT 1";

								$stm = $con->prepare($sql);
								$stm->bindparam(':correo',$correo);
								$stm->bindparam(':clave', $clave);
								$stm->execute();
								

								if($stm->rowCount() >0){
								
									$urow = $stm->fetch(PDO::FETCH_ASSOC);
									$_SESSION['uid'] = $urow['id'];
									$_SESSION['unombres'] = $urow['nombres'];
									$_SESSION['urol'] = $urow['rol'];

									echo $urow['rol'];

									// $rows = $stm ->fetchAll();
									// var_dump($rows);
									return true;
								}else{
									return false;
								}

	} catch (Exception $e) {
		echo $e;
	}
	 
}

function showArticles($con){
	try {
		$stm = $con->prepare("select * from articulos");
		$stm->execute();
		return $stm->fetchAll();
	} catch (PDOException $e) {
		echo $e->getMessage(); 
	}
		
}		

function saveArticle($con,$nombre,$precio,$imagen='default'){
	try {
		if($imagen == 'default'){
			$sql = "INSERT INTO articulos VALUES(DEFAULT,:nombre,:precio,DEFAULT)";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombre',$nombre);
			$stm->bindparam(':precio',$precio);
		}else{
			$sql = "INSERT INTO articulos VALUES(DEFAULT,:nombre,:precio,:imagen)";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombre',$nombre);
			$stm->bindparam(':precio',$precio);
			$stm->bindparam(':imagen',$imagen);
		}
		
		if($stm->execute()){
			$_SESSION['message_action'] = 'Se adiciono correctamente';
			echo "<script>window.location.replace(./);</script>";
		}else{
			echo "<script>window.location.replace(./);</script>";

		}

		//$stm->execute();
		//return $stm->fetchAll();
	} catch (PDOException $e) {
		echo $e->getMessage(); 
	}
}

function showArticle($con,$id){
	try {
		$stm = $con->prepare("select * from articulos WHERE id=:id");
		$stm->bindparam(':id', $id);

		$stm->execute();
		return $stm->fetchAll();
	} catch (PDOException $e) {
		echo $e->getMessage(); 
	}
}

function updateArticle($con,$id,$nombre,$precio,$imagen='default'){
	try {
		if($imagen == 'default'){
			$sql = "UPDATE  articulos SET nombre = :nombre, precio = :precio WHERE id = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombre',$nombre);
			$stm->bindparam(':precio',$precio);
			$stm->bindparam(':id',$id);
			}else{
			$sql = "UPDATE  articulos SET nombre = :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombre',$nombre);
			$stm->bindparam(':precio',$precio);
			$stm->bindparam(':imagen',$imagen);
			$stm->bindparam(':id',$id);
		}
		if($stm->execute()){
			$_SESSION['message_action'] ='El articulo Se Modifico con Exito!';
			echo "<script>window.location.replace('./');</script>";
		}else{
			echo "<script>window.location.replace('./');</script>";
		}
	} catch (PDOException $e) {
		echo $e->getMessage(); 
	}
}

function deleteArticle($con, $id){
                       try{
                               $stm = $con->prepare("DELETE FROM articulos WHERE id = :id");
                               $stm->bindparam(':id', $id);

                               if($stm->execute()){
                                       $_SESSION['message_action'] = "EL artículo se eliminó correctamente";
                                       echo "<script>window.location.replace('./');</script>";
                               }
                               
                       } catch(PDOException $e){
                       echo $e->getMessage();
               }
       }
function showCliente($con,$id){
	try {
		$stm = $con->prepare("select * from articulos WHERE id=:id");
		$stm->bindparam(':id', $id);

		$stm->execute();
		return $stm->fetchAll();
	} catch (PDOException $e) {
		echo $e->getMessage(); 
	}
}