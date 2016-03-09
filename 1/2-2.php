<!DOCTYPE html>
<html>
<head>
	<title>Proyecto 2-2</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse:collapse
}
	th, td {
    padding: 5px;
}
	th, td {
    text-align: center;
}

</style>
<body>
	<?php
	$frase=$_GET['frase'];
		function iniciar($frase)
		{
			$array = explode(" ", $frase);
			
		/* Esto solo me va a imprimir el Array, no es necesario.
			print_r($array);
		*/
			$count=count($array);
			echo '<table style="width:10%" border="1%">';
			for ($i=0; $i < $count ;$i++) { 
				
				echo '<tr>';
				echo '<td>'.$array[$i].'</td>';
				echo '<td>'.strlen($array[$i]).'</td>';
			}
		}	
		

	iniciar($frase)
?>
</body>
</html>
