<html>

<head>
	<title>MEU SITE DAORA</title>
	<link rel="shortcut icon" type="image/x-icon" href="./?getimg=favicon" />
	<style type="text/css">
		body {
			position: relative;
			background-color: #FFFFFF;
			font-family: "Trebuchet MS", Verdana;
			font-size: 10pt;
			text-align: left;
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>

<body>
	<center>
		<h1>magia</h1>
		<p>Preencha com os números:</p>

		<form method="POST" action="processamento.php">
			<?php
				
				for ($i = 1; $i <= 10; $i++) {
					echo "<label for='numero{$i}'>Digite o {$i}º número: </label>";
					echo "<input type='number' name='numero{$i}' id='numero{$i}' required><br>";
				}
			?>
			<input type="submit" value="Enviar">
		</form>


	</center>
</body>

</html>
