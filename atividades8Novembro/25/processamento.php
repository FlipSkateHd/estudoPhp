<?php

		$entrada = $_POST['idades'];

		$idades = explode(",", $entrada); //tira a virgula
		$idades = array_map('trim', $idades); //tira os espaços
		$idades = array_map('intval', $idades); //transforma todos da array em inteiros

		// Calcula a média
		$soma = array_sum($idades);
		$quantidade = count($idades);
		$media = $soma / $quantidade;

		if ($media >= 0 && $media <= 25) {
			$classificacao = "jovem";
		} elseif ($media >= 26 && $media <= 60) {
			$classificacao = "adulta";
		} else {
			$classificacao = "idosa";
		}

		echo "<h1>Resultado</h1>";
		echo "<p>Soma das idades: $soma</p>";
		echo "<p>Total de pessoas: $quantidade</p>";
		echo "<p>Média de idade: " . number_format($media, 2) . "</p>";
		echo "<p>A turma é classificada como: <strong>$classificacao</strong></p>";
	
?>
<p><a href="index.php">Calcular novamente</a></p>
