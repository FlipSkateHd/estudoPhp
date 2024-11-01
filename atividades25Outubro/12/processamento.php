<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $mes = $_POST["numero1"];
        $hora = $_POST["numero2"];
        $numero1 = $mes * $hora;
        
        
        
        echo "Valor antigo: ".$numero1."";

        if ($numero1 <= 900) {
            
            echo"Valor isento de impostos: ". $numero1 ."R$";
        } 
        
        elseif ($numero1 > 900 && $numero1 <= 1500) {
            $numero1 = (5/100 * $numero1) - $numero1;
            echo"Novo valor: ". $numero1 ."R$";
        } 
        
        elseif($numero1 >= 2500) {
            $numero1 = (10/100 * $numero1) - $numero1;
            echo"Novo valor: ". $numero1 ."R$";
        }
        ?>
    </center>
</body>

</html>