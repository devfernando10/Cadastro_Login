<?php

use Random\Engine\Secure;

    session_start();
    // print_r($_SESSION);
    include_once('config.php');

    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM  usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);

    // print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Techost</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            color: ffff;
        }
        h1 {
            text-align: center;
        }
        .table-bg{
            background-color: rgba(0.5, 0.5, 0.5, 0.8);
            border-radius: 15px 15px 0 0;
        }
       

        
       
    </style>
</head>
<body>
    <br>
<div style="position: absolute; right: 20px;">
    <a href="sair.php" class="btn btn-danger">Sair</a>
</div>
<br>
<?php

    echo "<h1>Bem vindo <u>$logado</u></h1>"

?>
<br>
<br>
<div class="m-5">
    <table class="table text-white table-bg" >
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Telefone</th>
        <th scope="col">Sexo</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Endereço</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
    <?php

        while($user_data = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>" .$user_data['id']."</td>";
            echo"<td>" .$user_data['nome']."</td>";
            echo"<td>" .$user_data['email']."</td>";
            echo"<td>" .$user_data['senha']."</td>";
            echo"<td>" .$user_data['telefone']."</td>";
            echo"<td>" .$user_data['genero']."</td>";
            echo"<td>" .$user_data['data_nasc']."</td>";
            echo"<td>" .$user_data['cidade']."</td>";
            echo"<td>" .$user_data['estado']."</td>";
            echo"<td>" .$user_data['endereco']."</td>";
            echo"<td> 
                <a class = 'btn btn-sm btn-primary' href = 'edit.php?id= $user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a>
                <a class = 'btn btn-sm btn-danger' href = 'delete.php?id= $user_data[id]'>
                    <svg xmlns=<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                  </svg>
                </a>
            </td>";
            echo"</tr>";
        }

    ?>
    </tbody>
    </table>
</div>

</body>
</html>