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

		<h1>CALCULADORA DE SOMAS:</h1>

		<form action="processamento.php" method="POST">
			Nome: <input type="text" name="nome"> <br>
			Idade: <input type="number" name="idade"> <br>
			Salário: <input type="number" name="salario"> <br>
			Sexo(F ou M): <input type="text" name="sexo"> <br>
			Estado Civil(S,C,V ou D): <input type="text" name="estadoCivil"> <br>

			<input type="submit" value="enviar">
		</form>

	</center>

</body>

</html>