<div class="navbar navbar-warning navbar-fixed-top">
	<div class="navbar-header">
		<button class="navbar-toggle collapsed" 
		data-toggle="collapse"
		data-target="#bs-example-navbar-collapse-1" 
		aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			
		</button>
		<a href="<?=$base_url;?>" class="navbar-brand">Inicio</a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
		<li class="active	"><a href="javascript:;" class="text-uppercase">
			<?=$_SESSION['urol'];?>
		</a>

		</li>

			<li class="dropdown">	

				<a href="" class="dropdown-toggle"
				data-toggle="dropdown"
				role="button"
				aria-haspopup="true"
				aria-expanded="false">
				<i class="material-icons">face</i>

					<?= $_SESSION['unombres'];?>
				<span class="caret"></span>

				</a>

			<ul class="dropdown-menu">	
			
				<li><a href="<?=$base_url?>misDatosc.php"><i class="material-icons">library_books</i>Mis datos</a></li>
				<?php if ($_SESSION['urol'] == 'cliente'): ?>
					<li><a href="">	<i class="material-icons">shopping_cart</i>carrito de compras</a></li>
					<li><a href="">	<i class="material-icons">add_shopping_cart</i>mis compras</a></li>
				<?php endif ?>
				
				<li><a href="<?=$base_url?>edit.php"><i class="material-icons">exit_to_app</i>cerrar sesion</a></li>


			</ul>
			</li>
		</ul>
	</div>
</div>