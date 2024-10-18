<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Você é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero >= 5000) {
         echo'Salario alto';
     } elseif ($numero <= 4999 and $numero >= 2000) {
         echo'Salario medio';
     } else {
         echo'Salario baixo';
     }
    ?>
    </center>
</body>

</html>