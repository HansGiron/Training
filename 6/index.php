<?php 
	@$funcion=$_GET['indice'];
	include ('controlador.php');
	if ($funcion=="detalle") {
			echo indice_detallado($indice_detallado);
	} else {
		if ($funcion=="normal") {
			echo indice_simple($indice_simple);
		}
	}
	
	

 ?>