<?php
	$frase=$_GET['frase'];
		function iniciar($frase)
		{
			$array = explode(" ", $frase);
			
		/* Esto solo me va a imprimir el Array, no es necesario.
			print_r($array);
		*/
			$count=count($array);
			for ($i=0; $i < $count ;$i++) { 
				echo $array[$i]." ";
				echo strlen($array[$i])." ". '<br>';
			}
		}

		function task()
		{


		}

	iniciar($frase)
?>