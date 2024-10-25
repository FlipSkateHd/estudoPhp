<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if ($numero1 == $numero2) {
            echo "Numeros iguais";
        } elseif ($numero1 > $numero2) {
            echo $numero1;
        } else {
            echo $numero2;
        }
        ?>
    </center>
</body>

</html>