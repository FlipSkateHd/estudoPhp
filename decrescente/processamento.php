<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Aqui sua tabuada:</h1>
    <?php
     $numero = $_POST['numero'];
     
     for ($i = $numero; $i >= 0; $i--){
        echo 'Numero: '. $i;
        echo '<br>';
     }

    ?>
    </center>
</body>

</html>