<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $paisA = 80000;
        $paisB = 200000;
        $anos = 0;

        while ($paisA <= $paisB) {
           
            $paisA = $paisA *  (1 + 0.03);
            $paisB = $paisB * (1 + 0.015);
            
            
            $anos++;
        }
        
        echo "O país A ultrapassará igualará a população do país B em $anos anos.\n";
     
        ?>
    </center>
</body>

</html>