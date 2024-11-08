<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];

        if ($numero1 < 10) {
            echo "numero válido";
        }  else {
            echo "numero inválido";
        }
        ?>
    </center>
</body>

</html>