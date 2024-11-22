<?php
$pares = 0;
$impares = 0;


for ($i = 1; $i <= 10; $i++) {
	$numero = intval($_POST["numero{$i}"]);

	if ($numero % 2 == 0) {
		$pares++;
	} else {
		$impares++;
	}
}


echo "<h3>Resultados:</h3>";
echo "Quantidade de números pares: $pares<br>";
echo "Quantidade de números ímpares: $impares<br>";
?>