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
        <h1>Calcular Fatorial</h1>
        <form action="processamento.php" method="post">
            <label for="numero">Digite um número inteiro (entre 0 e 15):</label>
            <input type="number" id="numero" name="numero" min="0" max="15" required>
            <button type="submit">Calcular Fatorial</button>
        </form>
    </center>
</body>
</html>
