<?php
	$ini=($_GET['ini'] == true);
	$phrase = $_GET['phr'];
		function frase($phrase){
		$phrase = array_reverse(explode(" ", $phrase));
		$phrase = implode(" ", $phrase);
		print $phrase;
	}

	
	if ($ini) {
		frase($phrase);
	}
?>