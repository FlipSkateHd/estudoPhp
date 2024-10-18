<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Resultado:</h1>
    <?php
     $numero = $_POST['numero'];
     
     echo'Seu peso ideal é '. (($numero * 72.7) - 58);
    ?>
    </center>
</body>

</html>