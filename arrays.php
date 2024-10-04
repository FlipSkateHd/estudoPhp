<?php
$notas = array("Gabriel" => 6, "Mauá" => 8, "Kauã" => 4);  //Declarando array
echo "As notas dos alunos foram, respectivamente: ";
foreach ($notas as &$alunos) {   //Utilizando laço para exibir os valores
    echo "\n $alunos \n";
}

?>