<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Você é</h1>
    <?php
     $numero1 = $_POST['numero1'];
     $numero2 = $_POST['numero2'];

     if ($numero1 > $numero2) {
        echo $numero1, ' é maior que ', $numero2;
     } elseif ($numero1 < $numero2) {
         echo $numero1, ' é menor que ', $numero2;
     } else {
       echo $numero1, ' é igual ao ', $numero2;
     }
    ?>
    </center>
</body>

</html>