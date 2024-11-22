<html>
<head>
	<title>Resultado Primo</title>

</head>
<body>
	<?php
		
			$numero = $_POST['numero'];
			$verificaPrimo = true;

			if ($numero < 2) {
				$verificaPrimo = false;
			} else {
				for ($i = 2; $i <= sqrt($numero); $i++) {
					if ($numero % $i === 0) {
						$verificaPrimo = false;
						break;
					}
				}
			}

			if ($verificaPrimo) {
				echo "<p>O número $numero é primo!</p>";
			} else {
				echo "<p>O número $numero não é primo.</p>";
			}
		
	?>
	<p><a href="index.php">Verificar outro número</a></p>
</body>
</html>
