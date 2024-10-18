<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Sua multa é</h1>
    <?php
     $peso = $_POST['primeiro'];
     $excesso = 0;

    if ($peso > 50) {
        $excesso = $peso - 50;
        $excesso = $excesso * 4;
        echo 'Valor final com a multa:', $excesso, 'R$';
    } else {

        echo 'Não tomou multa.';
    }


    ?>
    </center>
</body>

</html>