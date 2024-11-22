<?php
$numero1 = $_POST['numero1'];
		
	for ($i = 0; $i <= 10; $i++){
		echo '<br>',$numero1,'x',$i,'=',$numero1 * $i;
	}
?>