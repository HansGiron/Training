<?php
	$phrase = $_GET['phr'];
	$phrase = array_reverse(explode(" ", $phrase));
	$phrase = implode(" ", $phrase);
	print $phrase;
?>