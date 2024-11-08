<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Vários Valores para um Array</title>
</head>
<body>

    <h2>Adicionar Múltiplos Valores</h2>

    <form method="post" action="processamento.php">
        <label for="valores">Digite vários valores separados por vírgula:</label><br>
        <input type="text" id="valores" name="valores" placeholder="Exemplo: 10, 20, 30" required><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
