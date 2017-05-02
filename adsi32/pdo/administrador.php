<?php 
	require 'config/app.php' ;
	require 'config/database.php';
	require 'config/security_admin.php';

	include 'template/header.inc';
	include 'template/navbar.inc';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>Bienvenido <?=$_SESSION['unombres'];?></h1>
			<hr>

			<!--  -->
			
				<ul class="nav nav-pills block-center" role="tablist">
					<li class="active">
						<a href="admin/articles/index.php">
							<i class="material-icons">card_giftcard</i>
							articulos
						</a>
					</li>
					<li class="active">
						<a href="cliente.php">
							<i class="material-icons">supervisor_account</i>
							clientes
						</a>
					</li>
					<li class="active">
						<a href="admin/sales/">
							<i class="material-icons">shopping_cart</i>
							compras
						</a>
					</li>
				</ul>
			
			
    	
		
		</div>
	</div>
</div>

<?php include 'template/footer.inc'; ?>