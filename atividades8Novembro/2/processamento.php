<html>
<title>processamento</title>
<style></style>

<body>
    <center>
        <h1>resultado:</h1>
        <?php
        $user = $_POST["user"];
        $senha = $_POST["senha"];

        if ($user == $senha) {
            echo 'ERRO: você não pode usar o nome e senha iguais! <a href="\estudosPhp\atividades8Novembro\2\index.php">volte para a tela de login</a>';
        } else {
            echo "Logado com sucesso!";
        }
        ?>
    </center>
</body>

</html>