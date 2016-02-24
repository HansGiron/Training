<?php
        
	//Escribe 3 sujetos
	$item1=$_GET['it1'];
	$item2=$_GET['it2'];
	$item3=$_GET['it3'];
	//Escribe 3 complementos
	$comp1=$_GET['cp1'];
	$comp2=$_GET['cp2'];
	$comp3=$_GET['cp3'];
	{
		echo "El $item1 salta cuando $comp1
			<br>
			El $item2 salta cuando $comp2
			<br>
			El $item3 salta cuando $comp3"	;
	}
?>