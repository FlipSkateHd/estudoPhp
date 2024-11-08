<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seu resultado:</h1>
    <?php
     $nome = $_POST['nome'];
     $idade = $_POST['idade'];
     $salario = $_POST['salario'];
     $sexo = $_POST['sexo'];
     $estadoCivil = $_POST['estadoCivil'];

     $sexo = strtolower($sexo);
     $estadoCivil = strtolower($estadoCivil);

     if ($nome >= 3 && $idade > 0 && $idade < 150 && $salario > 0 && $sexo == 'f' || $sexo == 'm' && $estadoCivil == 's' || $estadoCivil == 'c' || $estadoCivil == 'v' || $estadoCivil == 'd' ) {
         echo'Registro validado!';

     } else {
         echo 'ERRO:<a href="\estudosPhp\atividades8Novembro\3\index.php"> Refaça seu registro</a>';

     }

     
     
     
    ?>
    </center>
</body>

</html>