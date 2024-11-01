<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        $maior; 
        $menor;

        if ($numero1 > $numero2) {
           if($numero1 > $numero3){ 
            $maior = $numero1;
        }
    }
    
        if($numero2 > $numero1){
            if($numero2 > $numero3){
                $maior = $numero2;
            }
        }  

        if($numero3 > $numero1){
            if($numero3 > $numero2){
                $maior = $numero2;
            }
        }  

        if ($numero1 < $numero3) {
           if($numero1 < $numero2){ 
            $menor = $numero1;
        }
    }
    
        if($numero2 < $numero1){
            if($numero2 < $numero3){
                $menor = $numero2;
            }
        }  

        if($numero3 < $numero1){
            if($numero3 < $numero2){
                $menor = $numero3;
            }
        }  


        



        echo "Maior:". $maior. ", Menor: ". $menor;

        ?>
    </center>
</body>

</html>
