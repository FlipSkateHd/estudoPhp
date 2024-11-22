<html>
<head>
	<title>Resultado Primos</title>
</head>
<body>
	<?php

			$n = $_POST['numero'];
			$primos = [];
			$totalDivisoes = 0;

			for ($i = 2; $i <= $n; $i++) {
				$verificaPrimo = true;

				for ($j = 2; $j < $i; $j++) {
					$totalDivisoes++;
					if ($i % $j === 0) {
						$verificaPrimo = false;
						break;
					}
				}

				if ($verificaPrimo) {
					$primos[] = $i;
				}
			}

			echo "<p>Os números primos entre 1 e $n são: " . implode(", ", $primos) . ".</p>";
			echo "<p>Total de divisões executadas: $totalDivisoes.</p>";
		
	?>
	<p><a href="index.php">Calcular novamente</a></p>
</body>
</html>
