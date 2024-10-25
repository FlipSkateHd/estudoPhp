<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $letra = $_POST["letra"];

        if ($letra == 'F' || $letra == 'f') {
            echo "feminino";
        } elseif ($letra == 'M' || $letra == 'm') {
            echo "masculino";
        } else {
            echo "inválido";
        }
        ?>
    </center>
</body>

</html>