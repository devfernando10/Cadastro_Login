<?php

if (!empty($_GET['id']))
{

    include_once('config.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);


    if($result->num_rows > 0)
    { 
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }

    //    print_r($nome);
    }

    else 
    {
        header('Location: sistema.php');
    }
 
}
    else
    {
        header('Location: sistema.php'); 
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
        .box #update {
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
        .box #update:hover {
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
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <div class="form-group inputBox">
                    <input type="text" name="nome" id="nome" class="form-control inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="email" id="email" class="form-control inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="senha" id="senha" class="form-control inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <div class="form-group inputBox">
                    <input type="tel" name="telefone" id="telefone" class="form-control inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div class="form-group">
                    <p>Sexo:</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="feminino" name="genero" value="feminino" class="form-check-input" <?php echo ($genero== 'feminino') ? 'checked': '' ?> required>
                        <label for="feminino" class="form-check-label">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="masculino" name="genero" value="masculino" class="form-check-input"  <?php echo ($genero== 'masculino') ? 'checked': '' ?> required>
                        <label for="masculino" class="form-check-label">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="outro" name="genero" value="outro" class="form-check-input"  <?php echo ($genero== 'outro') ? 'checked': '' ?> required>
                        <label for="outro" class="form-check-label">Outro</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="<?php echo $data_nasc?>" required>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="cidade" id="cidade" class="form-control inputUser" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="estado" id="estado" class="form-control inputUser" value="<?php echo $estado?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <div class="form-group inputBox">
                    <input type="text" name="endereco" id="endereco" class="form-control inputUser" value="<?php echo $endereco?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" class="btn btn-primary">
            </fieldset>
        </form>
    </div>

    <!-- Adicionei os scripts do Bootstrap e do jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>