<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];
        
        
        echo "Valor antigo: ".$numero1."";

        if ($numero1 <= 280) {
            $numero1 = (20/100 * $numero1) + $numero1;
            echo"Novo valor: ". $numero1 ."R$";
        } 
        
        elseif ($numero1 >= 700 && $numero1 < 1500) {
            $numero1 = (15/100 * $numero1) + $numero1;
            echo"Novo valor: ". $numero1 ."R$";
        } 
        
        elseif($numero1 >= 1500) {
            $numero1 = (10/100 * $numero1) + $numero1;
            echo"Novo valor: ". $numero1 ."R$";
        }
        ?>
    </center>
</body>

</html>