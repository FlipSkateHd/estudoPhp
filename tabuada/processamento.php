<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Aqui sua tabuada:</h1>
    <?php
     $tabuada = $_POST['tabuada'];
     
     for ($i = 0; $i <= 10; $i++){
        echo $i.' x '. $tabuada . ' : ';
        echo $i * $tabuada;
        echo '<br>';
     }

    ?>
    </center>
</body>

</html>