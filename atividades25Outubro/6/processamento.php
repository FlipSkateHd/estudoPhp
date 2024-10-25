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

        if ($numero1 == $numero2 && $numero2 == $numero3) {
            echo "todos numeros iguais";
        } elseif ($numero1 > $numero2 && $numero1 > $numero3) {
            echo $numero1;
        } elseif($numero2 > $numero1 && $numero2 > $numero3) {
            echo $numero2;
        }elseif($numero3 > $numero1 && $numero3> $numero2) {
            echo $numero3;
        } else {
            echo "dois numeros iguais";
        }

        ?>
    </center>
</body>

</html>