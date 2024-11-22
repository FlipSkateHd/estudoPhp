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
		<p>Gerador de fibonacci:</p>
		<?php

$a = 0;
$b = 1;
for ($i = 0; $i < 15; $i++) {
	echo $a . " ";
	$temp = $a;
	$a = $b;
	$b = $temp + $b;
}





?>


	</center>

</body>

</html>