<?php 
	require 'config/app.php' ;
	require 'config/database.php';
	require 'config/redirect.php';
	include 'template/header.inc';
	//include 'template/navbar.inc';

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Sistema ventas (Poo & mysql)</h1>
			<hr>
			<div class="panel panel-primary">
  				<div class="panel-heading">
  					<h3 class="panel-title">Ingreso de usuarios</h3>
  				</div>
  					<div class="panel-body">
  					<!-- segundo boostrap -->
  					<div class="row">
  						<div class="col-md-8 col-md-offset-2">
  						<p></p>

					<?php 

						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$correo = $_POST['correo'];
							$clave = md5($_POST['clave']);
							
								if(login($con,$correo,$clave)){
									
									if(isset($_SESSION['urol'])){
									if($_SESSION['urol'] == 'administrador'){
										echo "<script>window.location.replace('administrador.php');</script>";
									}else if($_SESSION['urol'] == 'cliente'){
										echo "<script>window.location.replace('cliente.php');</script>";
									}
								}
					

								}else{
										echo "<div class='alert alert-danger'>
								    <div >
									  <div class='alert-icon'>
										<i class='material-icons'>info_outline</i>
									  </div>
									  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'><i class='material-icons'>clear</i></span>
									  </button>
									  <b>Info alert:</b> Datos incorrectos
								    </div>
									</div>";
								}
							$con=null;											
						}

					 ?>


  							 <form action="" method="post">
  					  	<div class="form-group">
  					  		<input type="text"
  					  		class="form-control"
  					  		name="correo"
  					  		placeholder="Correo electronico">

  					  	</div>

  					  	<div class="form-group">
  					  	<input type="password"
  					  		class="form-control"
  					  		name="clave"
  					  		placeholder="Contraseña">
  					  		
  					  	</div>

  					  	<div class="ROUND">
  					  	<input type="submit"
  					  		class="btn btn-primary"
  					  		value="ingresar">
  					  		
  					  	</div>
  					  </form>
  						</div>
  					</div>
  					 
 				 </div>
			</div>

			
	</div>
		</div>
	</div>
</div>
<?php 
	include 'template/footer.inc';		
 ?>