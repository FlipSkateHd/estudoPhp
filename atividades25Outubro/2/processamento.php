<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];

        if ($numero1 == 0) {
            echo "o numero é zero";
        } elseif ($numero1 > 0) {
            echo "numero positivo";
        } else {
            echo "numero negativo";
        }
        ?>
    </center>
</body>

</html>