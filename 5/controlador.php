	<?php 
	include ('config.php');
	function obtener($indice){
		foreach ($indice as $page) {
			$pag = $page['pag'];
			@$getvalue=$getvalue.'<li>'.$page['titulo']."<a href='contenido/$pag.php'>".$page['pag']."</a></li>";
		}
		return "<ul>".$getvalue."</ul>";
	}
?>