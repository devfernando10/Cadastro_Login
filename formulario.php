<?php

if (isset($_POST['submit']))
{
    // print_r('Nome: '. $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: '. $_POST['email']);
    // print_r('<br>');
    // print_r('Senha: '. $_POST['senha']);
    // print_r('<br>');
    // print_r('Telefone: '. $_POST['telefone']); 
    // print_r('<br>');
    // print_r('Gênero: '. $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento: '. $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: '. $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: '. $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: '. $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, genero, data_nasc, cidade, estado, endereco)
    VALUES('$nome', '$email', '$senha', '$telefone', '$genero', '$data_nasc', '$cidade', '$estado', '$endereco')");

    header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Techost</title>
    <!-- Adicionando o link para o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #000000; /* Cor de fundo cinza escuro */
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .box {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.845);
        }
        .box legend {
            border: 1px solid #ffffff;
            padding: 10px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 8px;
            width: auto;
            margin: 0 auto 20px;
            color: #000000;
        }
        .box .form-group {
            margin-bottom: 20px;
        }
        .box .inputBox {
            position: relative;
        }
        .box .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .box .labelInput {
            position: absolute;
            top: 0;
            left: 0;
            transition: .5s;
            color: #999999;
        }
        .box .inputUser:focus ~ .labelInput,
        .box .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: #28a745; /* Verde do Bootstrap */
        }
        .box #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        .box #submit {
            background-color: #28a745; /* Verde do Bootstrap */
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        .box #submit:hover {
            background-color: #218838; /* Tom mais escuro do verde do Bootstrap */
        }
        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="logo-container">
            <img src="1.png" height="90px">
        </div>
        <form action="formulario.php" method="POST">
            <fieldset>
                <div class="form-group inputBox">
                    <input type="text" name="nome" id="nome" class="form-control inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="email" id="email" class="form-control inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="form-group inputBox">
                    <input type="password" name="senha" id="senha" class="form-control inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <div class="form-group inputBox">
                    <input type="tel" name="telefone" id="telefone" class="form-control inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div class="form-group">
                    <p>Sexo:</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="feminino" name="genero" value="feminino" class="form-check-input" required>
                        <label for="feminino" class="form-check-label">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="masculino" name="genero" value="masculino" class="form-check-input" required>
                        <label for="masculino" class="form-check-label">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="outro" name="genero" value="outro" class="form-check-input" required>
                        <label for="outro" class="form-check-label">Outro</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="cidade" id="cidade" class="form-control inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="estado" id="estado" class="form-control inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="endereco" id="endereco" class="form-control inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </fieldset>
        </form>
    </div>

    <!-- Adicionei os scripts do Bootstrap e do jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>