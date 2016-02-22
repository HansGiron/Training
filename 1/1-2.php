<?php
	$phrase = "Luis Carlos es mi jefe xD";
	$phrase = array_reverse(explode(" ", $phrase));
	$phrase = implode(" ", $phrase);
	print $phrase;
?>