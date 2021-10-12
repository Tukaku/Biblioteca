<?php
    if($_POST){
    require_once "conexao.php";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuario VALUES (default,'{$email}','{$senha}')";
        
        if($senha==""){
            $erro = "Preencah o nome !";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro = "Email invalido";
        }else if ($conn->query($sql) === TRUE) {
            $m = "Cadastro com sucesso";
        
        } else {
            $erro = "Erro ao cadastrar!";
        }
        
        $conn->close();
        }
    ?>