<?php 
			function tabla($n,$ni){
				for ($cons=1;$cons<=$ni;$cons++) {

					$respuesta = $respuesta.'<tr>'.'<td>'.$n.'x'.$cons.'='.'</td>'.'<td>'.$n*$cons.'</td>'.'</tr>';
				}
				return  '<table style="width:10%" border="1%">'.$respuesta.'</table>'; 
			}

		function frases($frase){
			$array = explode(" ", $frase);
			
		
			$count=count($array);
			
			for ($i=0; $i < $count ;$i++) { 
				
				$res = $res.'<tr>'.'<td>'.$array[$i].'</td>'.'<td>'.strlen($array[$i]).'</td>'.'</tr>';
			}
			return '<table style="width:10%" border="1%">'.$res.'</table>';
		}	
?>