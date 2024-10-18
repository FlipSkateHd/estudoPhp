<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu numero é</h1>
    <?php
     $numero = $_POST['numero'];

     if ($numero >= 7) {
        echo'O aluno passou!';
     } else {
        echo 'O aluno <b>reprovou.</b>';
     }
    ?>
    </center>
</body>

</html>