<?php 
	require '../../config/app.php' ;
	require '../../config/database.php';
	require '../../config/security_admin.php';

	include '../../template/header.inc';
	include '../../template/navbar.inc';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<!--  -->
				
				<h4 class="text-uppercase">Modulo de articulos</h4>
				<hr>	
				<a href="add.php" class="btn tbn-success">
					<i class="material-icons">add</i>
					adicionar articulo
				</a>
				<br>

				<?php if(isset($_SESSION['message_action'])): ?>
					<div class="alert alert-success">
						<div class="alert-icon">
							<i class="material-icons">check</i>
						</div>
						<button type="button" class="close" data-dismiss="alert" aria-label="close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						</button>
						<b>Aviso</b><?= $_SESSION['message_action']; ?>
					</div>
				<?php unset($_SESSION['message_action']); ?>
			<?php endif; ?>
				<table class="table table-hover">	
						<thead>	
							<th class="text-center">id</th>
							<th class="text-center">nombres</th>
							<th class="text-center">precio</th>
							<th class="text-center">acciones</th>
						</thead>
						<tbody>	

							<?php 	$arts = showArticles($con);?>
							<?php foreach($arts as $art): ?>
								<tr>	
									<td><?= $art['id'] ?></td>
									<td><?= $art['nombre'] ?>	</td>
									<td><?= number_format($art['precio']) ?></td>
									<td><?= $art['imagen'] ?></td>
									<td>	
										<a href="show.php?id=<?=$art['id']?>" class="btn btn-primary btn-xs btn-simple" title="consultar"><i class="material-icons">search</i></a>
										<a href="edit.php?id=<?=$art['id']?>" class="btn btn-primary btn-xs btn-simple" title="modificar"><i class="material-icons">create</i></a>
										<a href="javascript:;" class="btn btn-danger btn-xs btn-simple btn-delete" rel="tooltop" data-delete="<?=$art['id']?>" title="eliminar"><i class="material-icons">delete</i></a>
									</td>
								</tr>

							<?php endforeach ?>
						</tbody>
				</table>
				
			
			
    	
		
		</div>
	</div>
</div>

<?php include '../../template/footer.inc'; ?>