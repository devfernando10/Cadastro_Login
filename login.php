<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1c1c1d;
            color: #ffffff;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            background-color: #495057;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            background-color: #000000;
        }
        .navbar-brand,
        .navbar-text {
            color: #ffffff;
        }
        .navbar-logo {
            max-height: 70px; 
        }
       
       
    </style>

</head>
<body>

<div class="container login-container">
    <form id="login-form" action="teste.php" method="post">
        <h2 class="text-center mb-4">Login</h2>
        <input class="form-control" type="text" name="email" placeholder="Email">
        <br><br>
        <input class="form-control" type= "password" name="senha" placeholder="Senha">       
        <br><br>
        <input class="btn btn-primary btn-block" type="submit" name="submit" value="Enviar">
        <br>
        <a href="formulario.php">
        <button type="button" class="btn btn-success btn-block" onclick="createAccount()">Crie uma conta</button>
</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>