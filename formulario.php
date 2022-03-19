<?php
    // se existir submit, irá printar as informações.
    if(isset($_POST['submit']))
    {
        
        // print_r('referencia: ' .  $_POST['referencia']);
        // print_r('nome: ' .  $_POST['nome']);
        // print_r('email: ' .  $_POST['email']);
        // print_r('senha: ' .  $_POST['senha']);
        // print_r('cpf: ' .  $_POST['cpf']);
        // print_r('data_contratacao: ' .  $_POST['data_contratacao']);
        // print_r('rua: ' .  $_POST['rua']);
        // print_r('cep: ' .  $_POST['cep']);
        // print_r('bairro: ' .  $_POST['bairro']);
        // print_r('estado: ' .  $_POST['estado']);
        
        include_once('config.php');

        
        $referencia = $_POST['referencia'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $data_contratacao = $_POST['data_contratacao'];
        $rua = $_POST['rua'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(referencia,nome,email,senha,cpf,data_contratacao,rua,cep,bairro,estado) 
        VALUES ('$referencia','$nome','$email','$senha','$cpf','$data_contratacao','$rua','$cep','$bairro','$estado')"); 
    
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário</title>
</head>

<body>
    <a href="home.php">Voltar</a>
    <form class="box" method="POST" action="formulario.php" >
        <fieldset>
            <legend class="legend"><b>Formulário de Funcionários</b></legend>
            <br>
            <div class="inputBox">
                <p>Foto:</p>
                <form class="labelInput" action="action_page">                   
                    <input type="radio" id="ativo" name="referencia" value="ativo">
                    <label for="ativo">Ativo</label>
                    <input type="radio" id="inativo" name="referencia" value="inativo">
                    <label for="inativo">Inativo</label>
                    <br><br>
                    <div class="inputBox">
                        
                        <input type="text" name="nome" id="nome" class="input-user" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="input-user" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="input-user" required>
                        <label for="senha" class="labelInput">senha</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="cpf" name="cpf" id="cpf" class="input-user" required>
                        <label for="cpf" class="labelInput">CPF</label>
                    </div>
                    <br>

                    <label for="data_contratacao"></label>Data de contratação:
                    <input type="date" name="data_contratacao" id="data_contratacao" required>


                    <br><br>
                    <div class="inputBox">
                        <input type="rua" name="rua" id="rua" class="input-user" required>
                        <label for="rua" class="labelInput">Rua</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="cep" name="cep" id="cep" class="input-user" required>
                        <label for="cep" class="labelInput">CEP</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="bairro" name="bairro" id="bairro" class="input-user" required>
                        <label for="bairro" class="labelInput">Bairro</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="cidade" name="cidade" id="cidade" class="input-user" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="estado" name="estado" id="estado" class="input-user" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit"></input>
                    
                </fieldset>
                </form>
            </div>
        
    </form>
</body>

</html>