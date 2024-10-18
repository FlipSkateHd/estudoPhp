<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Aqui sua tabuada:</h1>
    <?php
     $numero1 = $_POST['numero1'];
     $numero2 = $_POST['numero2'];
     
     if ($numero1 > $numero2) {
     for ($i = $numero1; $i >= $numero2; $i--){
        echo 'Numero: '. $i;
        echo '<br>';
     }
    } else if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++){
            echo 'Numero: '. $i;
            echo '<br>';
    }
    } else {
        echo 'Números iguais!';
    }
    ?>
    </center>
</body>

</html>