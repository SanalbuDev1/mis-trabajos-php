<?php 
	
	function autoload($c){
		include  $c . ".php";
	}

	spl_autoload_register('autoload');

	persona::mostrar("jajaja");
	auto::mostrar("lol");

 ?>