<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $letra = $_POST["letra"];

        if ($letra == 'V' || $letra == 'v') {
            echo "Boa tarde!";
        } elseif ($letra == 'M' || $letra == 'm') {
            echo "Bom dia!";
        }elseif($letra == 'N' || $letra == 'n'){ 
            echo 'Boa noite!';
        }
        else {
            echo "inválido";
        }
        ?>
    </center>
</body>

</html>