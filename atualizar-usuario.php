<?php

    include "conexao.php";

    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuario SET email='{$email}', senha='{$senha}' WHERE id={$id}";

    if ($conn->query($sql) === TRUE) {
        echo "Atualizado com sucesso";
    } else { 
                echo "Error: " .$conn->error;
        }
        $conn->close();
    ?>