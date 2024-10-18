<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Resultado:</h1>
    <?php
     $numero = $_POST['numero'];
     $sexo = $_POST['sexo'];
     if($sexo == 1){
        echo'Seu peso ideal é '. (($numero * 72.7) - 58);
     } else if($sexo == 0){
        echo'Seu peso ideal é '. (($numero * 62.1) - 44.7);
    }
     ?>
    </center>
</body>

</html>