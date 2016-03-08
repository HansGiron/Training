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
				for ($cons=1;$cons<=$ni;$cons++) { 
					$resultado = proceso($n, $cons);
					echo $n.' x '.$cons.' = '.$resultado.'<br>';


				}
			}

		imprimir($n,$ni);
?>