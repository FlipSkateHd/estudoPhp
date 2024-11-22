<?php
        
        $numero = $_POST['numero'];
        $fatorial = 1;
        for ($i = $numero; $i > 0; $i--) {
            $fatorial *= $i;
        }
        echo "<p>O fatorial de $numero é: $fatorial</p>";
    
    ?>