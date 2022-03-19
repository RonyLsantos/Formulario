<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tela de Login</title>
    
</head>

<body>
    <a href="home.php">Voltar</a>
    <div class="card-login">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <div class="input-card">
            <input class="email-login" type="text" name="email" placeholder="E-mail">
            <br><br>
            <input class="senha-login" type="password" name="senha" placeholder="Senha">
            <br><br>
            <Button type="submit" name="submit" class="button-login">Cadastrar</Button> 
        </form>       
    </div>

</body>

</html>