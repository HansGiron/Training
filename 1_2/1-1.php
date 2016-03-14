<?php
		$n=$_GET["n"];
		$ini=($_GET['ini'] == true);
	function tablamultiplicar($n){
					for($cons=1;$cons<=10;$cons++)
		{
			$res=$n*$cons;
			echo $n.'x'.$cons.'='.$res.'<br>';
		}
}
	

	if ($ini) {
		tablamultiplicar($n);
	}
?>