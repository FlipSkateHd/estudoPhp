<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $media = ($numero1 + $numero2) /2;
        if ($media >= 7) {
            echo "Aprovado, media =", $media;
        }
        else if ($media < 7) {
            echo "Reprovado media =", $media;
        } elseif ($media == 10) {
            echo "Aprovado com Dinstinção";
        }
        ?>
    </center>
</body>

</html>