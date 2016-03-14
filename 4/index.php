<?php 
	echo 
	$funcion=$_GET['funcion'];

	$n=$_GET['n'];
	$ni=$_GET['ni'];

		
	$frase=$_GET['frase'];


	include ('funciones.php');

	if ($funcion === "multiplicar") {
		echo tabla($n,$ni);
	}
	elseif ($funcion === "frases") {
		echo frases($frase);
	}
?>