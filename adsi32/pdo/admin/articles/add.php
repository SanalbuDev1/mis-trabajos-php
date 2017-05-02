<?php 
	require '../../config/app.php' ;
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../template/header.inc';
	include '../../template/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 ">
		<ol class="breadcrumb">
			<li><a href="../../index.php">Menu Principal</a></li>
			<li><a href="index.php">Modulo Articulos</a></li>
			<li class="active">Adicionar Articulo</li>
		</ol>
		<h4 class="text-uppercase">Adicionar Articulo</h4>		
		<hr>
		<form action="" id="frm" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text"
				 data-validation="required"
				 class="form-control" name="nombre" placeholder="Nombre">
			</div>
			<div class="form-group">
				<input type="number" class="form-control" name="precio" placeholder="Precio"
				data-validation="number">
			</div>
			<div class="form-group">
				<input type="file" id="upload" name="imagen" accept="image/*">
				<button class="btn btn-primary btn-upload" type="button">
					<i class="material-icons">photo</i>
					Subir foto
				</button>
			</div>	
				<div class="form-group">
				   <button class="btn btn-success" type="submit">
				   		<i class="material-icons">send</i>
				   		Adicionar
				   </button>
				   <button class="btn btn-danger" type="reset">
						<i class="material-icons">clear</i>
						Eliminar
					</button>
			
			</div>
		</form>
	
			<?php 
				if($_FILES){
					$nombre = $_POST['nombre'];
					$precio = $_POST['precio'];
					$imagen = 'public/imgs/articles/'.$_FILES['imagen']['name'];
					

					if(!empty($_FILES['imagen']['name'])) {
							move_uploaded_file($_FILES['imagen']['tmp_name'], '../../'.$imagen);
							saveArticle($con,$nombre,$precio,$imagen);
							$_SESSION['message_action'] = 'se agrego con imagen';

									
						}else{
							saveArticle($con,$nombre,$precio);
							$_SESSION['message_action'] = 'se agrego sin imagen';

						}



				}
			 ?>

		</div>
	</div>
</div>
<?php include '../../template/footer.inc'; ?>