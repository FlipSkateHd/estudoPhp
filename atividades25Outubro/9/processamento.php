<DOCTYPE html>
    <html>
    <title>processamento</title>
    <style></style>

    <body>
        <center>
            <h1>resultado:</h1>
            <?php

            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];
            $numero = array($numero1, $numero2, $numero3);

            $count = count($numero);

            for ($i = 0; $i < $count - 1; $i++) {
                for ($j = 0; $j < $count - 1 - $i; $j++) {
                    if ($numero[$j] > $numero[$j + 1]) {
                        $temp = $numero[$j];
                        $numero[$j] = $numero[$j + 1];
                        $numero[$j + 1] = $temp;
                    }
                }
            }
            echo "Números ordenados em decrescente: ";
            echo "<br>";
            $reverse = array_reverse($numero);
            echo implode(", ", $reverse);
            ?>
        </center>
    </body>

    </html> 