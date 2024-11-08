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
		<p>Contando impares de 1 a 50:</p>
		<?php
		 	
			for ($i = 1; $i <= 50; $i++) {
				if($i % 2 == 1) {
					echo $i. ' ';
				 }
			}

		?>


	</center>

</body>

</html>