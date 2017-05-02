<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
		
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-center">CRUD PHP Y MYSQL</h1>
				<h6 class="text-center text-muted text-uppercase">Sistema de avatars</h6>
				<hr>
				<a href="add.php" class="btn btn-lg btn-success" data-toogle="tooltip" data-placement="top" title="Adicionar Avatar">
					<i class="glyphicon glyphicon-plus"></i>
					Avatar
				</a>
				<hr>
				<?php if (isset($_SESSION['action'])): ?>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

							 <?php if ($_SESSION['action'] == 'Add'): ?>
							 	<strong>Aviso</strong>El avatar se registro correctamente
							 <?php endif ?>
							 <?php if ($_SESSION['action'] == 'Edit'): ?>
							 	<strong>Aviso</strong>El avatar se Modifico correctamente
							 <?php endif ?>
							 <?php if ($_SESSION['action'] == 'Delete'): ?>
							 	<strong>Aviso</strong>El avatar se Elimino correctamente
							 <?php endif ?>
							</div>
						</div>
					</div>
					<?php unset($_SESSION['action']) ?>
				<?php endif ?>

				<?php  
					include('includes/db.php');
					$sql = "SELECT * FROM avatars";
					$rs =  mysqli_query($con,$sql);
				?>

				<div class="row">
					<?php while($row = mysqli_fetch_array($rs)){ ?>

						<div class="col-md-3">
							<figure class="avatars" style="background:url(<?=$row['image']?>)no-repeat center;">
								<figcaption><?=$row['name']?></figcaption>
								<nav class="text-center">
									<a href="show.php?id=<?php 	echo $row['id'] ?>" 
									class="btn btn-default"
									data-toggle="tooltip"
									data-placement="top"
									title="Consultar">
											<i class="glyphicon glyphicon-search"></i>
									</a>
									<a href="edit.php?id=<?php echo $row['id']?>"
									 class="btn btn-default"
									 data-toggle="tooltip"
									 data-placement="top"
									 title="Editar">
											<i class="glyphicon glyphicon-pencil"></i>
									</a>
									
								
									<button class="btn tbn-danger btn-delete"
									data-toggle="tooltip"
									data-placement="top"
									title="Eliminar"
									data-id="<?= $row['id']?>">

										<i class="glyphicon glyphicon-trash">	</i>
									</button>
								</nav>
							</figure>
						</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
			$('[data-toogle="tooltip"]').tooltip();
			$('.btn-delete').click(function(event) {
				if (confirm('¿Realmente desea eliminar este avatar?')) {
					$id=$(this).attr('data-id');
					window.location.replace('delete.php?id='+$id);
				}
				});
		});
	</script>

	
</body>
</html>