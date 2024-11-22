<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$soma =0;

for ($i = $numero1; $i <= $numero2; $i++) {
        echo $i .' ';
        $soma += $i;
        
} 
echo "<br> Soma total:", $soma;


?>