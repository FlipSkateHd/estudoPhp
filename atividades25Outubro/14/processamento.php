<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $media = ($numero1 + $numero2) / 2;    
        if ($media >= 10) {
            echo "Nota A";
        } else if ($media >= 7.5 && $media <= 9) {
            echo "Nota B";
        } else if ($media >= 6 && $media < 7.5) {
            echo "Nota C";
        } else if ($media >= 4 && $media < 6) {
            echo "Nota D";
        } else if ($media >= 0 && $media < 4) {
            echo "Nota E";
        }
        ?>
    </center>
</body>

</html>