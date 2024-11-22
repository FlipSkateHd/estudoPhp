<html>
<head>
	<title>Verificar Média de Idade</title>
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
	<h1>Verificar Média de Idade</h1>
	<p>Insira as idades das pessoas, separadas por vírgulas:</p>
	<form action="processamento.php" method="POST">
		<label for="idades">Idades:</label>
		<input type="text" id="idades" name="idades" placeholder="Exemplo: 20, 30, 25" required> <br><br>
		<button type="submit">Calcular</button>
	</form>
</body>
</html>
