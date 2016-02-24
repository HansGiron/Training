<?php
	$n=$_GET['n'];
	for($cons=1;$cons<=10;$cons++)
	{
		$res=$n*$cons;
		echo $n.'x'.$cons.'='.$res.'<br>';
	}
?>