<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu numero é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero %2 == 0) {
       echo 'O numero é par';
     } else {
        echo 'O número é impar';
     }
    ?>
    </center>
</body>

</html>