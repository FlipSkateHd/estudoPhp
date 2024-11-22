<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];	
$resultado = 0;


	for ($i=0; $i <= $numero2; $i++){
		$resultado = $numero1 * $numero1;
		
	}
	echo $resultado;
?>