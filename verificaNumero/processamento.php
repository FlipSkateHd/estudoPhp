<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu numero é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero >= 10) {
        echo'O numero ',$numero,' é maior ou igual a 10';
     } else {
        echo'O numero ',$numero,' é menor ou igual a 10';
     }
    ?>
    </center>
</body>

</html>