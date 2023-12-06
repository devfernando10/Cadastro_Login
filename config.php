<?php

    $dbHost = 'localhost';
    $dbUsername= 'root';
    $dbPassword= '';
    $dbName= 'formulario_fernando';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro na conexão com o banco de dados: ";
    // }

    // else 
    // {
    //     echo "Conexão com o banco de dados realizada com sucesso";
    // }
?>