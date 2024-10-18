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

		<h1>Calculo peso ideal (inclusivo):</h1>

		<form action="processamento.php" method="POST">
			Insira a altura(metros): <input type="text" name="numero"> <br>
			<select name="sexo" method="POST">
				<option value="0">Mulher</option>
				<option value="1">Homem</option>
			</select>
			<input type="submit" value="enviar">
		</form>

	</center>

</body>

</html>