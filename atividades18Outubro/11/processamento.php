<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu resultado:</h1>
    <?php
     $primeiro = $_POST['primeiro'];
     $segundo = $_POST['segundo'];
     $terceiro = $_POST['terceiro'];

     $operacao1 = ($primeiro * 2) * $segundo/2;
     $operacao2 = ($primeiro * 3) + $terceiro;
     $operacao3 = $terceiro * $terceiro * $terceiro;
     
     echo 'o produto do dobro do primeiro com metade do segundo.'.$operacao1.'<br>a soma do triplo do primeiro com o terceiro.'.$operacao2.'<br>.o terceiro elevado ao cubo.'.$operacao3;
     
    ?>
    </center>
</body>

</html>