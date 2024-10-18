<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Sua média é</h1>
    <?php
     $primeiro = $_POST['primeiro'];
     $segundo = $_POST['segundo'];
     $terceiro = $_POST['terceiro'];
     $quarto = $_POST['quarto'];

     $media = ($primeiro + $segundo + $terceiro + $quarto)/4;   


     echo $media;
    ?>
    </center>
</body>

</html>