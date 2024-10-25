<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $letra = $_POST["letra"];
        $letra = strtolower($letra);
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o'|| $letra == 'u') {
            echo "vogal";
        }  else {
            echo "consoante";
        }
        ?>
    </center>
</body>

</html>