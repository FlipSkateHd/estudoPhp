<?php

		$entrada = $_POST['notas'];

		$notas = explode(",", $entrada);
		$notas = array_map('trim', $notas); //trim paratirar os espaços
		$notas = array_map('floatval', $notas); //floatval para transformar todos da array em float


		$soma = array_sum($notas);
		$quantidade = count($notas);
		$media = $soma / $quantidade;

		echo "<h1>Resultado</h1>";
		echo "<p>Soma das notas: $soma</p>";
		echo "<p>Total de notas: $quantidade</p>";
		echo "<p>Média aritmética: " . number_format($media, 2) . "</p>";
	
?>
<p><a href="index.php">Calcular novamente</a></p>
