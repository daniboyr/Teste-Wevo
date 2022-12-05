<?php
session_start();
    //print_r($_REQUEST)
    //print pra testar se estava recebendo os parametros do cadastro.php

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
//verificação pra ver se foi submitado ou não
{
    //acessa o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //    print_r('Email: ' . $email);
    //    print_r('<br>');
    //    print_r('Senha ' . $senha);
    //    tirando a prova real pra verificar se recebeu os valores
    $sql = "SELECT * FROM clientes WHERE Email = '$email' and Senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) 
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    else 
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}   
else
{
    header('Location: login.php'); 
}
?>