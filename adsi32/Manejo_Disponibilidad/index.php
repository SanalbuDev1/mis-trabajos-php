<?php 
	require 'config/app.php';
	require 'config/database.php';
	include 'template/header.inc';
 ?>
	<article class="pri text-center">
		<form action="" method="post">
			<div class="head">
				<p class="login">Iniciar Seccion</p>
			</div>
			<div class="input">
				<div class="primero">
					<input type="text"  					  	
  					  		name="user"
  					  		placeholder="Usuario">
				</div>
				<div class="segundo">
					<input type="password"  					  		
  					  		name="password"
  					  		placeholder="Contraseña">
				</div>
			</div>
			<div class="roc"></div>
			<div class="remember">
				<input type="checkbox" class="boton"><p class="p2">Remind My Password</p>
				<input type="submit" class="boton2" value="Ingresar">
			</div>
		</form>
	</article>

	
	<p class="textito"> &copy;Todos los derechos reservados SPK</p>
	

<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$usuario = $_POST['user'];
		$password = $_POST['password'];
			
		if (login($con,$usuario,$password)){

			echo "<script>window.location.replace('administrador.php');</script>";
		}else{
			echo "<div class='alert alert-danger col-md-4 col-md-offset-5 text-center'>
								    <div >
									  <div class='alert-icon'>									
									  </div>
									  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'><i class='material-icons'>clear</i></span>
									  </button>
									  <b>Info alert:</b> Datos incorrectos
								    </div>
									</div>";
		}
		}	

		 ?>

<?php 
	include 'template/footer.inc';
 ?>
 </html>

	
