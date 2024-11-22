<?php
        
        $entrada = $_POST['numeros'];
        $numeros = explode(",", $entrada);
        $numeros = array_map('trim', $numeros);  // Remove espaços extras

        $numeros_validos = [];
        foreach ($numeros as $numero) {
            if (is_numeric($numero) && $numero >= 0 && $numero <= 1000) {
                $numeros_validos[] = (int)$numero;
            }
        }

        if (count($numeros_validos) > 0) {
            $menor = min($numeros_validos);
            $maior = max($numeros_validos);
            $soma = array_sum($numeros_validos);

            echo "<p>Menor valor: $menor</p>";
            echo "<p>Maior valor: $maior</p>";
            echo "<p>Soma dos valores: $soma</p>";
        } else {
            echo "<p>Nenhum número válido foi inserido. Por favor, insira números entre 0 e 1000.</p>";
        }
    
    ?>