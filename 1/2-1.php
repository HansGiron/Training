<!DOCTYPE html>
<html>
<head>
	<title>Proyecto 2-1</title>
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
	$n=$_GET['n'];
	$ni=$_GET['ni'];
		
			function proceso($n,$cons)
			{
				$res = $n * $cons;
				return $res;
			}
			function imprimir($n,$ni)
			{
				echo '<table style="width:10%" border="1%">';
				for ($cons=1;$cons<=$ni;$cons++) { 
					$resultado = proceso($n, $cons);
					
					echo '<tr>';
					echo '<td>'.$n.'x'. 		$cons.'='.'<td>'.$resultado.'</td>';
					echo '</tr>';
				


				}
			}

		imprimir($n,$ni);
?>
</body>
</html>
