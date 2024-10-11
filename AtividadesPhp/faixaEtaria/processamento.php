<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Você é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero >= 18) {
        echo'Adulto';
     } elseif ($numero >= 13 and $numero <= 17) {
        echo 'Adolescente';
     } else {
        echo 'Criança';
     }
    ?>
    </center>
</body>

</html>