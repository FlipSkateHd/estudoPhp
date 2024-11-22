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
		<h1>Lista de Números Primos</h1>
		<p>Descubra todos os números primos entre 1 e N:</p>
		<form action="processamento.php" method="POST">
			Insira um número inteiro N: <input type="number" name="numero" min="2" required> <br>
			<input type="submit" value="Gerar">
		</form>
	</center>
</body>
</html>
