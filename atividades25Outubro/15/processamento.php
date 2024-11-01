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

        if ($numero1 == $numero2 && $numero1 == $numero3) {
            echo "Triangulo equilátero";
            } elseif ($numero1 == $numero2 || $numero2 == $numero3) {
                echo "Triangulo Isóceles";
            } else {
                echo "Triângulo escaleno";
            }
        ?>
    </center>
</body>

</html>