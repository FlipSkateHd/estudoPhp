<?php
       
       $entrada = $_POST['numeros'];
       $numeros = explode(",", $entrada);
       $numeros = array_map('trim', $numeros);  // Remove espaços extras

       $numeros = array_map('intval', $numeros); // Converte para inteiros
       $menor = min($numeros);
       $maior = max($numeros);
       $soma = array_sum($numeros);

       echo "<p>Menor valor: $menor</p>";
       echo "<p>Maior valor: $maior</p>";
       echo "<p>Soma dos valores: $soma</p>";
   
   ?>