<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>Seu resultado:</h1>
        <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];
        $numero5 = $_POST['numero5'];
        $numeros = [$numero1, $numero2, $numero3, $numero4, $numero5];



        $maiorNumero = max($numeros);

        echo "O maior número é: $maiorNumero\n";





        ?>
    </center>
</body>

</html>