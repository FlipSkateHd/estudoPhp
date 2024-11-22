<html>
<head>
	<title>Resultado Primo</title>

</head>
<body>
	<?php
	$numero = $_POST['numero'];
	$divisores = [];
	$verificaPrimo = true;

	for ($i = 1; $i <= $numero; $i++) {
		if ($numero % $i === 0) {
			$divisores[] = $i;
		}
	}

	if (count($divisores) > 2) {
		$verificaPrimo = false;
	}

	if ($verificaPrimo) {
		echo "<p>O número $numero é primo!</p>";
	} else {
		$listaDivisores = implode(", ", $divisores);
		echo "<p>O número $numero não é primo. Ele é divisível por: $listaDivisores.</p>";
	}

?>
<p><a href="index.php">Verificar outro número</a></p>
</body>
</html>
