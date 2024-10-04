<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu numero é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero <= 10 ) {
        echo'O numero é menor ou igual a 10';
     } elseif ($numero > 10 and $numero <= 37) {
      echo'Numero maior que 10 e menor que 37';
     } else {
        echo 'Numero maior que 37';
     }
    ?>
    </center>
</body>

</html>