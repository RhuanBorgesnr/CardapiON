<?php 

if (isset($_POST['submit'])) {
    require 'conexao.php';

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    if (empty($email) || empty($senha)) {
        header("Location: ../login-restaurante.php?login=empty");
        exit();
    } else { 
        $sql = "select * from restaurante where email = '{$email}'";

        $result = mysqli_query($conexao, $sql);

        $row = mysqli_num_rows($result);

        $login = mysqli_fetch_assoc($result);
        if (password_verify($senha, $login['senha'])) {
            session_start();
            $_SESSION['email'] = $login['email'];

            header("Location: ../login-restaurante.php?login=success");
            exit();
            
        } else {
            header("Location: ../login-restaurante.php?login=wrongpassword");
            exit();
        }    
    }
} else {
    header("Location: ../login-restaurante.php");
    exit();
}