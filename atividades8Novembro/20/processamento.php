
    <?php
       
            $numero = $_POST['numero'];

            if ($numero >= 0 && $numero <= 15) {
                $fatorial = 1;
                for ($i = $numero; $i > 0; $i--) {
                    $fatorial *= $i;
                }
                echo "<p>O fatorial de $numero é: $fatorial</p>";
            } else {
                echo "<p>Por favor, insira um número entre 0 e 15.</p>";
            }
        
    ?>
