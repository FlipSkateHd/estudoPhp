<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $paisA = $_POST['paisA'];
        $paisB = $_POST['paisB'];

        $crescimentoA = $_POST['crescimentoA'];
        $crescimentoB = $_POST['crescimentoB'];

        $crescimentoA = $crescimentoA/100;
        $crescimentoB = $crescimentoB/100;

        
        $anos = 0;

        while ($paisA < $paisB) {
           
            $paisA *= (1 + $crescimentoA);
            $paisB *= (1 + $crescimentoB);
            
            
            $anos++;
        }
        
        echo "O país A ultrapassará igualará a população do país B em $anos anos.\n";
     
        ?>
    </center>
</body>

</html>