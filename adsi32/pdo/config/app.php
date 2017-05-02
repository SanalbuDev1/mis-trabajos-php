<?php 
	session_start();
	//llamada a recursos
	$base_url = 'http://localhost/adsi32/pdo/';
	$assets_css = $base_url.'public/css/';
	$assets_js = $base_url.'public/js/';
	$assets_imgs = $base_url.'public/imgs/';
	$assets_icon = $base_url.'iconfont/';
	//Data Base ==> Base de datos
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$ndb = 'adsi1132816';
	$con= null;
	$stm = null;


