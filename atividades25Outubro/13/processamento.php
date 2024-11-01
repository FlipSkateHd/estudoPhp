<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];

        switch ($numero1) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda";
                break;
            case 3:
                echo "Terça";
                break;
            case 4:
                echo "Quarta";
                break;
            case 5:
                echo "Quinta";
                break;
            case 6:
                echo "Sexta";
                break;
            case 7:
                echo "Sábado";
                break;



            default:
                echo "Valor inválido";
                break;
        }

        ?>
    </center>
</body>

</html>