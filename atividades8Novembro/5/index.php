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

		<h1>Insira os valores</h1>
		
		<form action="processamento.php" method="POST">
			Pessoas no Pais A: <input type="number" name="paisA"> <br>
			Pessoas no Pais B: <input type="number" name="paisB"> <br>
			Taxa de crescimento do pais A por ano(%): <input type="number" name="crescimentoA"> <br>
			Taxa de crescimento do pais B(%) por ano(%): <input type="number" name="crescimentoB"> <br>
		
		
		 <input type="submit" value="clique para descobrir">
		</form>

	</center>

</body>

</html>