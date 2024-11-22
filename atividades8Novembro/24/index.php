<html>
<head>
	<title>Calcular Média Aritmética</title>
	<style>
		body {
			font-family: "Trebuchet MS", Verdana;
			font-size: 12pt;
			text-align: center;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<h1>Calcular Média Aritmética</h1>
	<p>Insira as notas separadas por vírgula:</p>
	<form action="processamento.php" method="POST">
		<label for="notas">Notas:</label>
		<input type="text" id="notas" name="notas" placeholder="Exemplo: 7.5, 8.0, 6.5" required> <br><br>
		<button type="submit">Calcular</button>
	</form>
</body>
</html>
