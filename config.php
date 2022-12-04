<!-- arquivo para fazer a conexão/integração com o bd-->
<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost, $dbUsername,$dbPassword, $dbName);

    // if ($conexao->connect_ernno)
    //{
    //     echo "Erro";
    //}
    // else{
    //      echo "Conectado com sucesso.";
    //  }
    // teste pra ver se conectou ou não ao bd
    
    ?>