<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura o valor do campo "valores"
    $entrada = $_POST['valores'];

    // Separa os valores usando a vírgula como delimitador
    $valoresArray = explode(',', $entrada);

    // Limpa espaços extras de cada valor (se houver)
    $valoresArray = array_map('trim', $valoresArray);

    // Exibe o array resultante
    echo "<h3>Valores Recebidos:</h3>";
    echo "<pre>";
    print_r($valoresArray);
    echo "</pre>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
