<?php 

	if($_POST):

		$bg=$_POST['bg'];
		if ($bg=='bg1'):
			echo 'url(imgs/co1.jpg)';
		endif;
		if ($bg=='bg2'):
			echo 'url(imgs/pok1.jpg)';
		endif;
		if ($bg=='bg3'):
			echo 'url(imgs/pok2.jpg)';
		endif;
	endif;

	