<html>
<title>processamento</title>
<style></style>

<body>
    <center>
    <h1>Seja bem vindo</h1>
    <?php
     $email = $_POST['email'];
     $password = $_POST['password'];
     echo'Você digitou o email:';
     echo $email;
     echo'<br>';
     echo'Sua senha é:';
     echo $password;
    ?>
    </center>
</body>

</html>