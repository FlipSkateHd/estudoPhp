<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu numero é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero >= 18) {
        echo'Sua idade é: ',$numero,', você pode dirigir';
     } else {
      echo'Sua idade é: ',$numero,', <b>não</b> você pode dirigir';
     }
    ?>
    </center>
</body>

</html>