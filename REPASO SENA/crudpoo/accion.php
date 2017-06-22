<?php 
	include('clase.php');
	
	if ($_POST['accion'] == 'add') {
		
		$correo = $_POST['correo'];
		$contraseña = $_POST['contra'];

		if (!empty($_FILES['image']['name'])) {
			
			$image = time();
			$path = $_FILES['image']['name'];
			$extencion = pathinfo($path,PATHINFO_EXTENSION);
			$image = "imgs/".$image.".".$extencion;

			move_uploaded_file($_FILES['image']['tmp_name'], $image);


			$repaso = new repaso($correo,$contraseña,$image,'');
			$repaso->add();
		}else{
			$repaso = new repaso($correo,$contraseña,'','');
			$repaso->addsinimagen();
		}

	}



 ?>